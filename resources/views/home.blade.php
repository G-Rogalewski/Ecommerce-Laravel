@extends('head')
@extends('header')
@section('home')
@section('title', 'Loja de Artigos Oficiais de Futebol')
<main>
    <section class="d-flex">  
        <div id="carousel-main" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/real_madrid.jpg')}}" class="carousel-image">
                    <div class="carousel-caption d-none d-block">
                        <p class="carousel-text">Adquira já a nova camisa do Real Madrid para a temporada 22/23</p>
                        <button class="carousel-button">Comprar</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/arsenal.jpg')}}" class="carousel-image">
                    <div class="carousel-caption d-none d-block">
                        <p class="carousel-text">Arsenal anuncia o unifomre alternativo da temporada 22/23</p>
                        <button class="carousel-button">Comprar</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/bayern.jpg')}}" class="carousel-image">
                    <div class="carousel-caption d-none d-block">
                        <p class="carousel-text">Bayern de Munique anuncia os uniformes da temporada 22/23</p>
                        <button class="carousel-button">Comprar</button>
                    </div>
                </div>            
                <!-- Controles -->
                <a href="#carousel-main" class="carousel-control-prev" data-slide="prev">
                    <i class="fas fa-angle-left fa-3x"></i>
                </a>
                <a href="#carousel-main" class="carousel-control-next" data-slide="next">
                    <i class="fas fa-angle-right fa-3x"></i>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection
@extends('footer')