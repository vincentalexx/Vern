<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/login', function(){
    return view('login');
});


Route::get('/history', function(){
    return view('history');
});

Route::get('/home', function (){
    return view('home');
});

Route::get('/profile', function (){
    return view('profile');
});

Route::get('/order', function(){
    return view('order');
});

Route::get('/searchresult', function(){
    return view('searchresult');
});

Route::get('/card_details', function(){
    return view('card_details');
});

Route::get('/success', function(){
    return view('success');
});
