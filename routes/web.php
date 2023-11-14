<?php

use App\Http\Controllers\ProfileController;
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
//Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::middleware(['auth'])->group(function () {
    Route::get('/vehicle/{id}', [VehicleController::class, 'detail'])->name('vehicle.detail');

    Route::get('/history', function(){
        return view('history');
    })->name('history');

    Route::get('/profile', function (){
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

//INERTIA
//Route::get('/search', function () {
//    return Inertia::render('SearchPage');
//})->name('search');
Route::get('/search', [SearchController::class, 'inertiaSearch'])->name('search');



// BREEZE
//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});
//
//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';
