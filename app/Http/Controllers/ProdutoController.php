<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request) {
        $data = [];
        $listaProdutos = \App\Produto::all();
        $data['lista'] = $listaProdutos;
        return view('clubes_brasileiros/clubes_paranaenses', $data);
    }
}
