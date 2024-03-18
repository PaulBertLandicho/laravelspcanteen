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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginpage', function () {
    return view('loginpage');
});

Route::get('/registerpage', function () {
    return view('registerpage');
});

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/favorite', function () {
    return view('favorite');
});

Route::get('/orderhistory', function () {
    return view('orderhistory');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/category1', function () {
    return view('category1');
});

Route::get('/category2', function () {
    return view('category2');
});

Route::get('/category3', function () {
    return view('category3');
});

Route::get('/setup', function () {
    return view('setup');
});

Route::get('/about', function () {
    return view('about');
});