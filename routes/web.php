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
    return view('dashboard');
});


Route::get('tables', function () {
    return view('tables');
});

Route::get('billing', function () {
    return view('billing');
});

Route::get('virtual-reality', function () {
    return view('virtual-reality');
});

Route::get('sign-in', function () {
    return view('sign-in');
});

Route::get('sign-up', function () {
    return view('sign-up');
});

Route::get('rtl', function () {
    return view('rtl');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('lupa-sandi', function () {
    return view('lupa-sandi');
});

Route::get('send-email', function () {
    return view('send-email');
});