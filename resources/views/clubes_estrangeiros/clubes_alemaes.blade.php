@extends('head')
@extends('header')
@section('products')
@section('title', 'Clubes Alemães')
    <section>
        <div class="container">
            <div class="row">
                @if(isset($lista))
                    @foreach($lista as $prod)
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card">
                                <img class="card-img" src="{{ $prod->foto }}">
                                <h4 class="product-name">{{ $prod->nome }}</h4>
                                <p class="product-price">R${{ $prod->valor }}</p>
                                <div class="product-button">
                                    <a href="{{ route('adicionar_carrinho', ['idproduto' => $prod->id]) }}">
                                        <button class="add-button"><i class="fas fa-cart-plus"></i> Adicionar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
@extends('footer')