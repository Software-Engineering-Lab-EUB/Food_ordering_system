<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;

class StripeController extends Controller
{
    public function stripe($totalPrice)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Ensure the user is logged in
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->back()->with('message', 'Please login first');
        }

        $userid = $user->id;
        $cartItems = Cart::where('user_id', $userid)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('message', 'Your cart is empty!');
        }

        // Create the payment intent before handling the order logic
        $intent = PaymentIntent::create([
            'amount' => $totalPrice * 100, // Convert dollars to cents
            'currency' => 'usd',
        ]);

        // Loop through the cart items to save the order details
        foreach ($cartItems as $item) {
            $order = new Order();
            $order->name = $item->name;
            $order->email = $item->email;
            $order->phone = $item->phone;
            $order->address = $item->address;
            $order->menu_title = $item->menu_title;
            $order->image = $item->image;
            $order->quantity = $item->quantity;
            $order->price = $item->price;
            $order->menu_id = $item->menu_id;
            $order->user_id = $item->user_id;
            $order->payment_status = 'paid';
            $order->delivery_status = 'processing';
            $order->save();
        }

        // Optional: clear cart after placing order
        Cart::where('user_id', $userid)->delete();

        return view('home.stripe-payment', [
            'clientSecret' => $intent->client_secret,
            'intent' => $intent,
        ]);
    }

    public function processPayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $paymentIntentId = $request->payment_intent_id;

        $paymentIntent = PaymentIntent::retrieve($paymentIntentId);

        if ($paymentIntent->status == 'succeeded') {
            return redirect()->route('payment.success')->with('message', 'Payment successful!');
        } else {
            return redirect()->route('payment.failed')->with('error', 'Payment failed!');
        }
    }
}
