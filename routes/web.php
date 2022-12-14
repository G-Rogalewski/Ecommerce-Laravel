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

Route::match(['get', 'post'], '/registrar', [ProdutoController::class, 'registrar'])
    ->name('registrar');

    Route::match(['get', 'post'], '/registrar_cliente', [ProdutoController::class, 'RegistrarCliente'])
    ->name('registrar_cliente');

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

Route::match(['get', 'post'], '/{idcategoria}/clubes_cariocas', [ProdutoController::class, 'rj'])
    ->name('clubes_cariocas');

Route::match(['get', 'post'], '/{idcategoria}/clubes_paulistas', [ProdutoController::class, 'sp'])
    ->name('clubes_paulistas');

Route::match(['get', 'post'], '/{idcategoria}/clubes_cearenses', [ProdutoController::class, 'ce'])
    ->name('clubes_cearenses');

Route::match(['get', 'post'], '/{idcategoria}/clubes_espanhois', [ProdutoController::class, 'esp'])
    ->name('clubes_espanhois');

Route::match(['get', 'post'], '/{idcategoria}/clubes_ingleses', [ProdutoController::class, 'ing'])
    ->name('clubes_ingleses');

Route::match(['get', 'post'], '/{idcategoria}/clubes_alemaes', [ProdutoController::class, 'ale'])
    ->name('clubes_alemaes');
    
Route::match(['get', 'post'], '/{idcategoria}/clubes_italianos', [ProdutoController::class, 'ita'])
->name('clubes_italianos');

Route::match(['get', 'post'], '/{idcategoria}/clubes_franceses', [ProdutoController::class, 'fra'])
->name('clubes_franceses');

Route::match(['get', 'post'], '/{idcategoria}/clubes_holandeses', [ProdutoController::class, 'hol'])
->name('clubes_holandeses');

Route::match(['get', 'post'], '/{idcategoria}/clubes_portugueses', [ProdutoController::class, 'por'])
->name('clubes_portugueses');

Route::match(['get', 'post'], '/{idcategoria}/clubes_argentinos', [ProdutoController::class, 'arg'])
->name('clubes_argentinos');

Route::match(['get', 'post'], '/{idcategoria}/conmebol', [ProdutoController::class, 'conmebol'])
->name('conmebol');

Route::match(['get', 'post'], '/{idproduto}/carrinho/adicionar', [ProdutoController::class, 'adicionarCarrinho'])
->name('adicionar_carrinho');

Route::match(['get', 'post'], '/carrinho', [ProdutoController::class, 'verCarrinho'])
->name('ver_carrinho');

Route::match(['get', 'post'], '/{indice}/deleteCart', [ProdutoController::class, 'delete_cart'])
->name('delete_cart');
