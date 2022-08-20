<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/verifikasi', function () {
    return view('verifikasi');
});

Route::get('/menu', function () {
    return view('menu/menu');
});

Route::get('/error', function () {
    return view('error/error');
});

Route::get('/empty', function () {
    return view('empty/empty');
});
