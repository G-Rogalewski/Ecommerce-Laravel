<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Categoria;
use \App\Produto;
use \App\Usuario;
use \App\Endereco;

class ProdutoController extends Controller
{
    public function pr($idcategoria = 0, Request $request) {
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
    
    public function ba($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_brasileiros/clubes_baianos', $data);
    }
    
    public function rs($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_brasileiros/clubes_gauchos', $data);
    }

    public function sc($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_brasileiros/clubes_catarinenses', $data);
    }

    public function go($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_brasileiros/clubes_goianos', $data);
    }
    
    public function mg($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_brasileiros/clubes_mineiros', $data);
    }
    
    public function pe($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_brasileiros/clubes_pernambucanos', $data);
    }
    
    public function rj($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_brasileiros/clubes_cariocas', $data);
    }
    
    public function sp($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_brasileiros/clubes_paulistas', $data);
    }

    public function ce($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_brasileiros/clubes_cearenses', $data);
    }

    public function esp($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_estrangeiros/clubes_espanhois', $data);
    }
  
    public function ing($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_estrangeiros/clubes_ingleses', $data);
    }
    
    public function ale($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_estrangeiros/clubes_alemaes', $data);
    }

    public function ita($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_estrangeiros/clubes_italianos', $data);
    }
    
    public function fra($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_estrangeiros/clubes_franceses', $data);
    }
        
    public function hol($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_estrangeiros/clubes_holandeses', $data);
    }
           
    public function por($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_estrangeiros/clubes_portugueses', $data);
    }
               
    public function arg($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('clubes_estrangeiros/clubes_argentinos', $data);
    }
                   
    public function conmebol($idcategoria = 0, Request $request) {
        $data = [];
        $listaCategorias = Categoria::all();
        $queyProduto = Produto::limit(25);
        if($idcategoria != 0) {
            $queyProduto->where('categoria_id', $idcategoria);
        }
        
        $listaProdutos = $queyProduto->get();
        $data['lista'] = $listaProdutos;
        $data['listaCategoria'] = $listaCategorias;
        return view('selecoes/conmebol', $data);
    }

    public function adicionarCarrinho($idProduto = 0, Request $request) {
        $prod = Produto::find($idProduto);
        if($prod) {
            $carrinho = session('cart', []);
            array_push($carrinho, $prod);
            session([ 'cart' => $carrinho ]);
        }
        return redirect()->route('home');
    }

    public function verCarrinho(Request $request) {
        $carrinho = session('cart', []);
        $data = [ 'cart' => $carrinho ];
        return view('carrinho', $data);
    }

    public function delete_cart ($indice, Request $request) {
        $carrinho = session('cart', []);
        if (isset($carrinho[$indice])) {
            unset($carrinho[$indice]);
        }
        session(['cart' => $carrinho]);
        return redirect()->route('ver_carrinho');
    }

    public function registrar(Request $request) {
        $data = [];

        return view('registrar', $data);
    }

    public function registrarCliente(Request $request) {
        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);
        $usuario->login = $request->input('cpf', '');
        $endereco = new Endereco($values);
        $endereco->logradouro = $request->input('endereco', '');

        try {
            $usuario->save();
            $endereco->usuario_id = $usuario->id;
            $endereco->save(); 
        } catch(\Exception $e) {

        }

        return redirect()->route('registrar');
    }
}
