<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\GoogleAuthController;
Route::get('/',[HomeController::class,'index'])->name('index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('redirect',[HomeController::class,'redirect']);
Route::get('/view_catagory',[AdminController::class,'view_catagory']);
Route::post('/add_category',[AdminController::class,'add_category']);
Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
Route::get('/view_menu',[AdminController::class,'view_menu']);
Route::post('/add_menu', [AdminController::class, 'add_menu']);
Route::get('/show_menu',[AdminController::class,'show_menu']);
Route::get('/delete_menu/{id}',[AdminController::class,'delete_menu']);
Route::get('/update_menu/{id}',[AdminController::class,'update_menu']);
Route::post('/update_menu_confirm/{id}', [AdminController::class, 'update_menu_confirm']);
Route::get('/order',[AdminController::class,'order']);
Route::get('delivered/{id}',[AdminController::class,'delivered']);







Route::get('stripe/{totalprice}', [StripeController::class, 'stripe'])->name('stripe');
 Route::post('/stripe/payment', [StripeController::class, 'processPayment'])->name('stripe.payment.process');

Route::get('/payment/success', function () {
    return view('home.success'); 
})->name('payment.success');

Route::get('/payment/failed', function () {
    return view('home.cancel');
})->name('payment.failed');



// Google OAuth Routes

Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect'])->name('auth.google.redirect');

Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('auth.google.callback');



