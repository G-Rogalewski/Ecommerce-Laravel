@section('header')
    <nav class="navbar navbar-expand-md bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1 class="logo">FutStore</h1>
            </a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-header">
                <i class="fas fa-bars hamburguer"></i>
            </button>

            <div class="collapse navbar-collapse" id="nav-header">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link links" href="">Brasileiros</a>
                    </li>
                    <span class="divisor"></span>
                    <li class="nav-item">
                        <a class="nav-link links" href="">Europeus</a>
                    </li>
                    <span class="divisor"></span>
                    <li class="nav-item">
                        <a class="nav-link links" href="">Seleções</a>
                    </li>
                    <span class="divisor"></span>
                    <li class="nav-item">
                        <a class="nav-link links" href="">Chuteiras</a>
                    </li>
                    <span class="divisor"></span>
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