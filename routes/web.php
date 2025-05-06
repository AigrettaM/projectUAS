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
    return view('index');
});

Route::get('/artikel', function () {
    return view('artikel2');
});

Route::get('/detail-donasi', function () {
    return view('detaildonasi');
});

Route::get('/donasi', function () {
    return view('donasi');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/location', function () {
    return view('lokasi');
});

Route::get('/page-403', function () {
    return view('page-403');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/stok-darah', function () {
    return view('stokdarah');
});
