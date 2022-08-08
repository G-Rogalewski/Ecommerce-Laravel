@section('header')
    <nav class="navbar navbar-expand-md bg-dark">
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
                            id="dropdownMenuLink" 
                            data-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false" 
                            >Brasileiros</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item submenu-link" href="{{ route('clubes_paranaenses') }}">Paraná</a>
                            <a class="dropdown-item submenu-link" href="{{ route('clubes_gauchos') }}">Rio Grande do Sul</a>
                            <a class="dropdown-item submenu-link" href="#">Santa Catarina</a>
                            <a class="dropdown-item submenu-link" href="#">Rio de Janeiro</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links" href="">Europeus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links" href="">Seleções</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links" href="">Chuteiras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links" href="">Luvas</a>
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
@endsection