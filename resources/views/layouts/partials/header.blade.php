<header>
    <h1>Proyecto</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
            <li><a href="{{route('aplicaciones.index')}}" class="{{request()->routeIs('aplicaciones.*') ? 'active' : ''}}">Aplicaciones</a></li>
            <li><a href="{{route('categorias.index')}}" class="{{request()->routeIs('categorias.*') ? 'active' : ''}}">Categorías</a></li>
            <li><a href="{{route('comentarios.index')}}" class="{{request()->routeIs('comentarios.*') ? 'active' : ''}}">Comentarios</a></li>
            <li><a href="{{route('roles.index')}}" class="{{request()->routeIs('roles.*') ? 'active' : ''}}">Roles</a></li>
            <li><a href="{{route('usuarios.index')}}" class="{{request()->routeIs('usuarios.*') ? 'active' : ''}}">Usuarios</a></li>
            <li><a href="{{route('valoraciones.index')}}" class="{{request()->routeIs('valoraciones.*') ? 'active' : ''}}">Valoraciones</a></li>
        </ul>
    </nav>
</header>

{{-- <a href="/">Inicio</a>
<a href="{{route('auth.login')}}">Login</a>
<a href="/dashboard">Dashboard</a>
<a href="#">Logout</a> --}}

<!-- Nav -->
<nav class="navbar sticky-top navbar-expand-xl navbar-light bg-info">
    <div class="container-fluid">

        <button class="navbar-toggler me-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand me-sm-1 mx-auto ms-sm-0" href="{{ route('home') }}">
            <img src="/imgs/AppMarketLogo.png" width="42" height="34" alt="">
            <h1>AppMarket</h1>
        </a>
        
        @auth
            <div class="nav-item dropdown order-xl-1 ms-2">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        @else
            <div class="order-xl-1 ms-2 d-none d-sm-inline-block">
                <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Iniciar sesión</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Regístrate</a>
            </div>
        @endauth
        
        <div class="collapse navbar-collapse order-xl-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">

                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('home')}}">Inicio</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($G_CategoriasApps as $categoria)
                            <li>
                                @if ($categoria->cat_nombre == 'Otros')
                                    <li><hr class="dropdown-divider"></li>
                                @endif
                                <a class="dropdown-item" href="{{route('categorias.show', $categoria)}}">
                                    {{$categoria->cat_nombre}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="{{ route('aplicaciones.index') }}">Más recientes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('aplicaciones.create') }}">Nueva app</a></li>
                <hr>
                @guest
                    <li class="nav-item d-inline-block d-sm-none"><a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a></li>
                    <li class="nav-item d-inline-block d-sm-none"><a class="nav-link" href="{{ route('register') }}">Regístrate</a></li>
                    <hr class="d-inline-block d-sm-none">
                @endguest

            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>

    </div>
</nav>
<!-- Fin Nav -->