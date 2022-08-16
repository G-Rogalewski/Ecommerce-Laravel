@extends('head')
@extends('header')
@section('clubes_paranaenses')
@section('title', 'Clubes Paranaenses')
    <section>
        <div class="container">
            <div class="row">
                @if(isset($lista))
                    @foreach($lista as $prod)
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card">
                                <img class="card-img" src="{{ asset('images/brasileiros/parana/parana_2021_i.png')}}">
                                <h4 class="product-name">{{ $prod->nome }}</h4>
                                <p class="product-price">R$149,90</p>
                                <div class="product-button">
                                    <button class="add-button"><i class="fas fa-cart-plus"></i> Adicionar</button>
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