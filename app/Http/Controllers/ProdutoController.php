<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Categoria;
use \App\Produto;

class ProdutoController extends Controller
{
    public function clubes($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_brasileiros/clubes_paranaenses', $data);
    }
}
