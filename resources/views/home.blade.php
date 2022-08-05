@extends('head')
@extends('header')
@section('home')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <img class="card-img" src="{{ asset('images/brasileiros/parana_2021_i.png')}}">
                        <h4 class="product-name">Camisa Paraná Clube I 2021</h4>
                        <p class="product-price">R$149,90</p>
                        <div class="product-button">
                            <button class="add-button"><i class="fas fa-cart-plus"></i> Adicionar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <img class="card-img" src="{{ asset('images/brasileiros/parana_2020_ii.png')}}">
                        <h4 class="product-name">Camisa Paraná Clube II 2020</h4>
                        <p class="product-price">R$149,90</p>
                        <div class="product-button">
                            <button class="add-button"><i class="fas fa-cart-plus"></i> Adicionar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <img class="card-img" src="{{ asset('images/brasileiros/parana_2022_iii.png')}}">
                        <h4 class="product-name">Camisa Paraná Clube III 2022</h4>
                        <p class="product-price">R$179,90</p>
                        <div class="product-button">
                            <button class="add-button"><i class="fas fa-cart-plus"></i> Adicionar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <img class="card-img" src="{{ asset('images/brasileiros/vasco_2022_i.png')}}">
                        <h4 class="product-name">Camisa Vasco I 2022</h4>
                        <p class="product-price">R$179,90</p>
                        <div class="product-button">
                            <button class="add-button"><i class="fas fa-cart-plus"></i> Adicionar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <img class="card-img" src="{{ asset('images/europeus/real_madrid_2023_i.png')}}">
                        <h4 class="product-name">Camisa Real Madrid I 22/23</h4>
                        <p class="product-price">R$249,90</p>
                        <div class="product-button">
                            <button class="add-button"><i class="fas fa-cart-plus"></i> Adicionar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <img class="card-img" src="{{ asset('images/europeus/real_madrid_2023_ii.png')}}">
                        <h4 class="product-name">Camisa Real Madrid II 22/23</h4>
                        <p class="product-price">R$249,90</p>
                        <div class="product-button">
                            <button class="add-button"><i class="fas fa-cart-plus"></i> Adicionar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('footer')