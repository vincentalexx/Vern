<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/','/home');

// Route::get('/navbar', function () {
//     return view('navbar');
// });

// Route::get('/filter', function() {
//     return view('filter');
// });

Route::get('/signup', function(){
    return view('signup');
})->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('auth.signup');

Route::get('/login', function(){
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get("/auth/google", [AuthController::class, 'google'])->name("auth.google");
Route::get("/auth/google/callback", [AuthController::class, 'googleCallback'])->name("auth.google_callback");

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::middleware(['auth'])->group(function () {
    
    Route::get('/vehicle/{id}', [VehicleController::class, 'detail'])->name('vehicle.detail');

    Route::get('/history', function(){
        return view('history');
    })->name('history');

    Route::get('/profile', function (){
        Route::resource('userprofile', UserProfileController::class);
        return view('profile');
    })->name('profile');

    Route::get('/order', [OrderController::class, 'orderform'])->name('order.form');
    Route::post('/order/pay', [OrderController::class, 'orderplace'])->name('order.place');
    Route::post('/order/pay/confirm', [OrderController::class, 'pay'])->name('order.pay');
    Route::get('/order/success', function(){
        return view('success');
    })->name('success');
});

Route::post('/midtrans/callback', [OrderController::class, 'midtransCallback'])->name('midtrans.callback');
Route::get('/mailable', function(){
    $order = App\Models\Order::where('user_id', 1)->first();
    return new App\Mail\OrderSuccess($order);
}); // ini buat test email
