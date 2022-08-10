@extends('head')
@extends('header')
@section('clubes_paulistas')
@section('title', 'Clubes Paulistas')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <img class="card-img" src="{{ asset('images/brasileiros/parana/parana_2021_i.png')}}">
                        <h4 class="product-name">Camisa Paraná Clube 2021 - Home</h4>
                        <p class="product-price">R$149,90</p>
                        <div class="product-button">
                            <button class="add-button"><i class="fas fa-cart-plus"></i> Adicionar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('footer')