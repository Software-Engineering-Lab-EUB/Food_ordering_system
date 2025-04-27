<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu; 
use App\Models\Cart;
use App\Models\Order;
use App\Models\Contact;

use Pest\Mutate\Mutators\ControlStructures\ElseIfNegated;
use Session;

use Stripe;
// Import Auth

class HomeController extends Controller
{
    public function index()
    {
        $menu=menu::paginate(4);
        return view('home.userpage',compact ('menu'));
    }

    public function redirect()
    {
        $usertype = Auth::user()->usertype; // Fetch user type
        if ($usertype == '1') {
            $total_menu=Menu::all()->count();
            $total_order=Order::all()->count();
            $total_user=User::all()->count();
            $order=Order::all();
            $total_revenue=0;
            foreach($order as $order){

            $total_revenue=$total_revenue + $order->price;}

            $total_delivered=Order::where('delivery_status','=','delivered')->get()->count();
            $total_processing=Order::where('delivery_status','=','processing')->get()->count();
            return view ('admin.home',compact('total_menu','total_order','total_user','total_revenue','total_delivered','total_processing')); // Redirect admin
        } 
        
        else {
           // In redirect method
$menu = Menu::paginate(4);


return view('home.userpage', compact('menu')); // Corrected

        }
        
    }

    public function menu_details($id)
    {
       $menu=menu::find($id);
        return view('home.menu_details',compact('menu'));
    }
    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $menu = Menu::find($id); // Make sure the Menu model is correctly capitalized (Menu, not menu)
            
            // Create a new cart
            $cart = new Cart; 
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;
            $cart->menu_title = $menu->title;

            if ($menu->discount_price != null) {
                $cart->price = $menu->discount_price * $request->quantity;
            } else {
                $cart->price = $menu->price * $request->quantity;
            }
            
            
            $cart->image = $menu->image;
            $cart->menu_id = $menu->id; 
            $cart->quantity = $request->quantity; // Correct assignment here
            
            $cart->save();  // Save the cart to the database
            
            return redirect()->back()->with('success', 'Item added to cart successfully.');
        } else {
            return redirect('login');
        }
    }
    

    public function show_cart()
    {
        if (Auth::id()) {
            $id=Auth::user()->id;
            $cart=cart::where('user_id','=', $id)->get();
             return view('home.showcart',compact('cart'));

        }
        else{
            return redirect('login');
        }
    
    }

    
    public function remove_cart($id)
{
    $cart = cart::find($id);
    
    
        $cart->delete();
        

    return redirect()->back();
}


public function cash_order()
{
    $user = Auth::user();

    if (!$user) {
        return redirect()->back()->with('message', 'Please login first');
    }

    $userid = $user->id;
    $cartItems = cart::where('user_id', $userid)->get();

    if ($cartItems->isEmpty()) {
        return redirect()->back()->with('message', 'Your cart is empty!');
    }

    foreach ($cartItems as $item) {
        $order = new order;
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
        $order->payment_status = 'cash on delivery';
        $order->delivery_status = 'processing';
        $order->save();
    }

    // Optional: clear cart after placing order
    cart::where('user_id', $userid)->delete();

    return redirect()->back()->with('message', 'We have received your order.We will connect with you soon.');
}


public function stripe($totalprice)
{
    return view ('home.stripe',compact('totalprice'));
}


public function show_order()
{
    if(Auth::id())
    {
        $user=Auth::user();
        $userid=$user->id;
        $order=Order::where('user_id','=',$userid)->get();
        return view('home.order',compact('order'));
    }

    else{
        return redirect('login');
    }
}

public function cancel_order($id)
{
    $order=Order::find($id);
    $order->delivery_status='You canceled the order';
    $order->save();

    return redirect()->back();
}






public function menu_search(Request $request)
{
    $search_text=$request->search;
    $menu = Menu::where(function ($query) use ($search_text) {
        $query->where('title', 'LIKE', "%{$search_text}%")
              ->orWhere('category', 'LIKE', "{$search_text}");
    })
    ->paginate(4);

    return view('home.userpage',compact('menu'));
}


public function menus()
{ $menu=menu::paginate(4);

    return view('home.all_menu',compact('menu'));
}

public function search_menu(Request $request)
{
   

    $search_text=$request->search;
    $menu = Menu::where(function ($query) use ($search_text) {
        $query->where('title', 'LIKE', "%{$search_text}%")
              ->orWhere('category', 'LIKE', "{$search_text}");
    })
    ->paginate(4);

    return view('home.all_menu',compact('menu'));
}

public function about()
{
    return view('home.about');
}

// Show Contact page
public function contact()
{
    return view('home.contact');
}

public function contactSubmit(Request $request)
{

    {
        $user = Auth::user();
    
        if (!$user) {
            return redirect()->back()->with('message', 'Please login first to send a message.');
        }
    
        $request->validate([
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);
    
        Contact::create([
            'name' => $user->name,
            'email' => $user->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
    
        return redirect()->back()->with('message', 'Thanks for contacting us! We will reply soon.');
    }


}


public function services()
{
    return view('home.services');
}

public function blog()
{
    return view('home.blog');
}

}

