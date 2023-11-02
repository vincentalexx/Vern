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

Route::get('/history', function(){
    return view('history');
})->name('history');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/profile', function (){
    return view('profile');
})->name('profile');

Route::get('/order', [OrderController::class, 'orderform'])->name('order.form');
Route::post('/order', [OrderController::class, 'orderplace'])->name('order.place');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/success', function(){
    return view('success');
})->name('success');

Route::get('/vehicle/{id}', [VehicleController::class, 'detail'])->name('vehicle.detail');
