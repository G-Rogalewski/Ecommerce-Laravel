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
    return view('clubes_brasileiros/clubes_paranaenses');
})->name('clubes_paranaenses');

Route::get('/clubes_gauchos', function () {
    return view('clubes_brasileiros/clubes_gauchos');
})->name('clubes_gauchos');

Route::get('/clubes_catarinenses', function () {
    return view('clubes_brasileiros/clubes_catarinenses');
})->name('clubes_catarinenses');

Route::get('/clubes_paulistas', function () {
    return view('clubes_brasileiros/clubes_paulistas');
})->name('clubes_paulistas');

Route::get('/clubes_cariocas', function () {
    return view('clubes_brasileiros/clubes_cariocas');
})->name('clubes_cariocas');

Route::get('/clubes_mineiros', function () {
    return view('clubes_brasileiros/clubes_mineiros');
})->name('clubes_mineiros');

Route::get('/clubes_goianos', function () {
    return view('clubes_brasileiros/clubes_goianos');
})->name('clubes_goianos');

Route::get('/clubes_baianos', function () {
    return view('clubes_brasileiros/clubes_baianos');
})->name('clubes_baianos');

Route::get('/clubes_pernambucanos', function () {
    return view('clubes_brasileiros/clubes_pernambucanos');
})->name('clubes_pernambucanos');
