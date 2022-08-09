@extends('head')
@extends('header')
@section('home')
<main>
    <section class="d-flex"><!--home -->  
            <div id="carousel-main" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner"><!--Inner -->
                <div class="carousel-item active">
                  <img src="{{ asset('images/real_madrid.jpg')}}" class="carousel-image">
                  <div class="carousel-caption d-none d-block">
                    <p class="carousel-text">Adquira já a nova camisa do Real Madrid para a temporada 22/23</p>
                    <button class="carousel-button">Comprar</button>
                  </div>
                </div>
                <!--/Inner -->
              <!-- Controles -->
              <a href="#carousel-main" class="carousel-control-prev" data-slide="prev">
                <i class="fas fa-angle-left fa-3x"></i>
              </a>
              <a href="#carousel-main" class="carousel-control-next" data-slide="next">
                <i class="fas fa-angle-right fa-3x"></i>
              </a>
            </div>
    </section><!--/home -->
</main>
@endsection
@extends('footer')