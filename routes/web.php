<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect('/','/home');

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
Route::get('/search', [SearchController::class, 'inertiaSearch'])->name('search');

Route::middleware(['auth'])->group(function () {

    Route::get('/vehicle/{id}', [VehicleController::class, 'detail'])->name('vehicle.detail');

    Route::get('/history', [OrderController::class, 'history'])->name('history');

    Route::get('/profile', function (){
        Route::resource('userprofile', UserProfileController::class);
        return view('profile');
    })->name('profile');

    Route::post('/profile', [UserProfileController::class, 'updateProfile'])->name('profile.update');

    Route::get('/change-password','ProfileController@change_password')->name('change_password');
	Route::post('/update-password','ProfileController@update_password')->name('update_password');	

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


// BUAT ADMIN
Route::get('/admin_history', [AdminController::class, 'getAllHistory'])->name('admin.history');
Route::get('/admin_orders', [AdminController::class, 'getAllOrders'])->name('admin.orders');
Route::get('/admin_history/{order}', [AdminController::class, 'getOrderDetail'])->name('admin.history.detail');


Route::get('/admin_vehicle', [AdminController::class, 'getAllVehicle'])->name('admin.vehicle');
Route::get('/admin_vehicle/{vehicle}', [AdminController::class, 'getVehicleDetail'])->name('admin.vehicle.detail');
Route::delete('/admin_vehicle/{vehicle}', [AdminController::class, 'deleteVehicle'])->name('admin.vehicle.delete');
Route::post('/admin_vehicle/create', [AdminController::class, 'createVehicle'])->name('admin.vehicle.create');
Route::post('/admin_vehicle/{vehicle}', [AdminController::class, 'updateVehicle'])->name('admin.vehicle.update');
Route::get('/admin_vehicle/{vehicle}', [AdminController::class, 'getVehicleDetail'])->name('admin.vehicle.detail');



Route::get('/admin_users', [AdminController::class, 'getAllUsers'])->name('admin.users');
Route::get('/admin_users/{user}', [AdminController::class, 'getUsersDetail'])->name('admin.users.detail');
Route::delete('/admin_users/{user}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
// ADMIN CHART
Route::get('/admin_home', [AdminController::class, 'adminHome'])->name('admin.home');

Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'forgotPasswordRequest'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'forgotPasswordReset'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'forgotPasswordUpdate'])->middleware('guest')->name('password.update');

Route::post('/admin_home', [AdminController::class, 'index']);


