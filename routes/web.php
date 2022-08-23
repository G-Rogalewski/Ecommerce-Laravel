<?php
use App\Http\Controllers\ProdutoController;

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

Route::match(['get', 'post'], '/{idcategoria}/clubes_paranaenses', [ProdutoController::class, 'pr'])
    ->name('clubes_paranaenses');

Route::match(['get', 'post'], '/{idcategoria}/clubes_baianos', [ProdutoController::class, 'ba'])
    ->name('clubes_baianos');

Route::match(['get', 'post'], '/{idcategoria}/clubes_gauchos', [ProdutoController::class, 'rs'])
    ->name('clubes_gauchos');

Route::match(['get', 'post'], '/{idcategoria}/clubes_catarinenses', [ProdutoController::class, 'sc'])
    ->name('clubes_catarinenses');

Route::match(['get', 'post'], '/{idcategoria}/clubes_goianos', [ProdutoController::class, 'go'])
    ->name('clubes_goianos');

Route::match(['get', 'post'], '/{idcategoria}/clubes_mineiros', [ProdutoController::class, 'mg'])
    ->name('clubes_mineiros');

Route::match(['get', 'post'], '/{idcategoria}/clubes_pernambucanos', [ProdutoController::class, 'pe'])
    ->name('clubes_pernambucanos');


Route::get('/clubes_paulistas', function () {
    return view('clubes_brasileiros/clubes_paulistas');
})->name('clubes_paulistas');

Route::get('/clubes_cariocas', function () {
    return view('clubes_brasileiros/clubes_cariocas');
})->name('clubes_cariocas');

