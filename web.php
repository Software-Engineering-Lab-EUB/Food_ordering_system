<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\StripeController;
// use App\Http\Controllers\GoogleAuthController;
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
// Route::get('/view_catagory',[AdminController::class,'view_catagory']);
// Route::post('/add_category',[AdminController::class,'add_category']);
// Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
// Route::get('/view_menu',[AdminController::class,'view_menu']);
// Route::post('/add_menu', [AdminController::class, 'add_menu']);
// Route::get('/show_menu',[AdminController::class,'show_menu']);
// Route::get('/delete_menu/{id}',[AdminController::class,'delete_menu']);
// Route::get('/update_menu/{id}',[AdminController::class,'update_menu']);
// Route::post('/update_menu_confirm/{id}', [AdminController::class, 'update_menu_confirm']);
// Route::get('/order',[AdminController::class,'order']);
// Route::get('delivered/{id}',[AdminController::class,'delivered']);
// Route::get('/search', [AdminController::class, 'search'])->name('search.route');
// Route::get('/contacts', [AdminController::class, 'viewContacts'])->name('contacts');
// Route::get('/contacts/{id}', [AdminController::class, 'viewContact']);






Route::get('/menu_details/{id}',[HomeController::class,'menu_details']);
Route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);
Route::get('show_cart',[HomeController::class,'show_cart']);
// web.php (routes)
Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);
Route::get('/cash_order', [HomeController::class, 'cash_order'])->name('cash_order');
Route::get('/stripe/{totalprice}', [HomeController::class, 'stripe'])->name('stripe');
Route::post('stripe', [HomeController::class, 'stripePost'])->name('stripe.post');
Route::get('/show_order', [HomeController::class, 'show_order'])->name('show_order');
Route::get('/cancel_order/{id}', [HomeController::class, 'cancel_order']);


Route::get('/menu_search', [HomeController::class, 'menu_search']);
Route::get('/menus', [HomeController::class, 'menus']);
Route::get('/search_menu', [HomeController::class, 'search_menus']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact-submit', [HomeController::class, 'contactSubmit'])->name('contact.submit');

Route::get('/services', [HomeController::class, 'services']);
Route::get('/blog', [HomeController::class, 'blog']);







// Route::get('stripe/{totalprice}', [StripeController::class, 'stripe'])->name('stripe');
//  Route::post('/stripe/payment', [StripeController::class, 'processPayment'])->name('stripe.payment.process');

// Route::get('/payment/success', function () {
//     return view('home.success'); 
// })->name('payment.success');

// Route::get('/payment/failed', function () {
//     return view('home.cancel');
// })->name('payment.failed');



// // Google OAuth Routes

// Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect'])->name('auth.google.redirect');

// Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('auth.google.callback');



