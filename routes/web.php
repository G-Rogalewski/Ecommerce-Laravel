<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/clubes_paranaenses', function () {
    return view('clubes_paranaenses');
})->name('clubes_paranaenses');

Route::get('/clubes_gauchos', function () {
    return view('clubes_gauchos');
})->name('clubes_gauchos');
