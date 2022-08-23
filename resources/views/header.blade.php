@section('header')
<header>
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <h1 class="logo">FutStore</h1>
            </a>

            <div class="search-bar">
                <input class="search-field" type="text" placeholder="Pesquisar..">
                <button class="search-button"><i class="fas fa-search search-icon"></i></button>
            </div>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-header">
                <i class="fas fa-bars hamburguer"></i>
            </button>

            <div class="collapse navbar-collapse" id="nav-header">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown show">
                        <a class="nav-link links dropdown-toggle" 
                            role="button" 
                            id="clubes_brasileiros" 
                            data-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false" 
                            >Brasileiros</a>
                        <div class="dropdown-menu" aria-labelledby="clubes_brasileiros">
                            <a class="dropdown-item submenu-link" href="{{ route('clubes_baianos', ['idcategoria' => 2]) }}">Bahia</a>
                            <a class="dropdown-item submenu-link" href="{{ route('clubes_goianos', ['idcategoria' => 5]) }}">Goiás</a>
                            <a class="dropdown-item submenu-link" href="{{ route('clubes_mineiros', ['idcategoria' => 6]) }}">Minas Gerais</a>
                            <a class="dropdown-item submenu-link" href="{{ route('clubes_paranaenses', ['idcategoria' => 1]) }}">Paraná</a>
                            <a class="dropdown-item submenu-link" href="{{ route('clubes_pernambucanos', ['idcategoria' => 7]) }}">Pernambuco</a>
                            <a class="dropdown-item submenu-link" href="{{ route('clubes_cariocas') }}">Rio de Janeiro</a>
                            <a class="dropdown-item submenu-link" href="{{ route('clubes_gauchos', ['idcategoria' => 3]) }}">Rio Grande do Sul</a>
                            <a class="dropdown-item submenu-link" href="{{ route('clubes_catarinenses', ['idcategoria' => 4]) }}">Santa Catarina</a>
                            <a class="dropdown-item submenu-link" href="{{ route('clubes_paulistas') }}">São Paulo</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown show">
                        <a class="nav-link links dropdown-toggle" 
                            role="button" 
                            id="clubes_estrangeiros" 
                            data-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false"
                            >Estrangeiros</a>
                        <div class="dropdown-menu" aria-labelledby="clubes_estrangeiros">
                            <a class="dropdown-item submenu-link" href="#">Alemanha</a>
                            <a class="dropdown-item submenu-link" href="#">Argentina</a>
                            <a class="dropdown-item submenu-link" href="#">Espanha</a>
                            <a class="dropdown-item submenu-link" href="#">França</a>
                            <a class="dropdown-item submenu-link" href="#">Holanda</a>
                            <a class="dropdown-item submenu-link" href="#">Inglaterra</a>
                            <a class="dropdown-item submenu-link" href="#">Itália</a>
                            <a class="dropdown-item submenu-link" href="#">Polônia</a>
                            <a class="dropdown-item submenu-link" href="#">Portugal</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown show">
                        <a class="nav-link links dropdown-toggle" 
                            role="button" 
                            id="selecoes" 
                            data-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false">
                            Seleções</a>
                        <div class="dropdown-menu" aria-labelledby="selecoes">
                            <a class="dropdown-item submenu-link" href="#">Alemanha</a>
                            <a class="dropdown-item submenu-link" href="#">Argentina</a>
                            <a class="dropdown-item submenu-link" href="#">Austrália</a>
                            <a class="dropdown-item submenu-link" href="#">Bélgica</a>
                            <a class="dropdown-item submenu-link" href="#">Brasil</a>
                            <a class="dropdown-item submenu-link" href="#">Coréia do Sul</a>
                            <a class="dropdown-item submenu-link" href="#">Croácia</a>
                            <a class="dropdown-item submenu-link" href="#">Egito</a>
                            <a class="dropdown-item submenu-link" href="#">Espanha</a>
                            <a class="dropdown-item submenu-link" href="#">Estados Unidos</a>
                            <a class="dropdown-item submenu-link" href="#">França</a>
                            <a class="dropdown-item submenu-link" href="#">Holanda</a>
                            <a class="dropdown-item submenu-link" href="#">Inglaterra</a>
                            <a class="dropdown-item submenu-link" href="#">Itália</a>
                            <a class="dropdown-item submenu-link" href="#">Japão</a>
                            <a class="dropdown-item submenu-link" href="#">México</a>
                            <a class="dropdown-item submenu-link" href="#">Polônia</a>
                            <a class="dropdown-item submenu-link" href="#">Portugal</a>
                            <a class="dropdown-item submenu-link" href="#">Uruguai</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links" href="">Chuteiras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links" href="">Bolas</a>
                    </li>
                    <span class="divisor"></span>
                    <div class="icons">
                    <i class="far fa-user icon"></i>
                    <i class="fas fa-shopping-cart icon"></i>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>
@endsection