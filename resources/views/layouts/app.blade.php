<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="{{ asset('plugins/css/bootstrap.min.css') }}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}"  media="screen,projection"/>    
        <link rel="stylesheet" href="{{ asset('plugins/css/sweetalert.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fileinput/css/fileinput.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="{{ url('/css/app.css') }}" rel="stylesheet">


        <!--Token Laravel -->
        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }}' };
        </script>
        <!--Token Laravel /-->
    </head>
    <body>
        
        <!-- Headar-->
        <header id="header-container">
            <div class="container">
                <div class="row flex-items-xs-middle flex-items-xs-between">
                    <div class="col-6">
                        <h1>CompuMundo</h1>
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <button class="navbar-toggler pull-xs-right hidden-md-up" data-toggle="collapse" data-target="#navMenu"  aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">&#9776;</button>
                        {{--  <a id="login"class="hidden-xs-down font-weight-bold"href="{{ url('/login') }}">Login</a>  --}}
                        <div class="dropdown pull-right hidden-xs-down font-weight-bold">
                            @if (Auth::guest())
                            <button class="btn btn-compumundo dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Inicio
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                                <a class="dropdown-item" href="{{ url('/register') }}">Registrarse</a>
                            </div>
                            @else
                            <button class="btn btn-compumundo dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesion</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>            
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Headar/-->
        
        <!--Menu-->
        <div id="menu-container">
            <nav class="navbar navbar-toggleable-sm navbar-light bg-faded">
                <div class="navbar-collapse collapse" id="navMenu">
                    <div class="container">
                        <div class="row">
                            <div class="col-10 offset-1 col-sm-8 col-md-4 offset-md-0">
                                <ul class="navbar-nav">
                                    <li class="nav-item text-center">
                                        <a href="{{ url('/') }}" class="nav-link active">Home</a>
                                    </li>
                                    @if (Auth::guest())
                                    <li class="nav-item text-center">
                                        <a href="{{ url('/') }}" class="nav-link active hidden-sm-up">Login</a>
                                    </li>
                                    @endif
                                    <li class="nav-item text-center">
                                        <a href="{{url('/catalogs') }}" class="nav-link">Catálogo</a>
                                    </li>
                                    <li>
                                        <i id="icon-car" class="fa fa-shopping-cart hidden-xs-down" aria-hidden="true"></i>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a href="{{ url('/carrito') }}" class="nav-link">Carrito</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a href="{{ url('/carrito') }}" class="nav-link circle-shopping-cart hidden-xs-down" class="">{{ $productsCount}}</a>
                                    </li>
                                    @if (Auth::check())
                                    <li class="nav-item text-center">
                                        <a href="{{ url('/compras') }}" class="nav-link">Pedidos</a>
                                    </li>
                                        @if (Auth::user()->id_profile == "1")
                                        <li class="nav-item text-center">
                                            <a href="{{ url('/orders') }}" class="nav-link">Ordenes</a>
                                        </li>
                                        <li class="nav-item text-center">
                                            <a href="{{ url('/users') }}" class="nav-link">Usuarios</a>
                                        </li>
                                        <li class="nav-item text-center">
                                            <a href="{{ url('/products') }}" class="nav-link">Productos</a>
                                        </li>
                                        <li class="nav-item text-center">
                                            <a href="{{ url('/products') }}" class="nav-link">Stock</a>
                                        </li>
                                        @endif
                                    @endif
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 offset-md-4 hidden-xs-down">
                                {!! Form::open(['route'=>'catalogs.index', 'method' => 'GET','role' => 'search'])!!}
                                <div class="input-group">
                                {!! Form::text('title', null, ['class' => 'form-control','placeholder' =>
                                '¿Encontro lo que buscaba?..','aria-describedby' => 'search'])!!}
                                    <span class="input-group-btn">
                                        <button class="btn btn-compumundo" type="submit">
                                            <span class="hidden-sm-down">Buscar</span>
                                            <i class="fa fa-search hidden-md-up"></i>
                                        </button>
                                    </span>
                                </div>
                                {!! Form::close()!!}
                            </div>
                        </div>
                    </div>
                </div>   
            </nav>
            <div id="search-bar" class="container hidden-sm-up">
                <div class="row">
                    <div class="col-12">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" 
                                placeholder="¿Encontró lo que buscaba?">
                                <span class="inout-group-btn">
                                    <button class="btn btn-compumundo" type="button">
                                        <span class="hidden-sm-down">Buscar</span>
                                        <i class="fa fa-search hidden-md-up"></i>
                                    </button>
                                </span>
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
        <!--Menu/-->

        <!-- Content-->
        @yield('content') 
        <!-- Content-->

        <!-- Footer-->
        <div id="footer-container">
            <div class="container">
                <div class="row text-center text-md-left">
                    <div class="col-md-4">
                        <form id="suscribeForm"action="#" method="post">
                            <h4 class="text-uppercase">¿Quieres recibir todas las novedades?</h4>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email"
                                placeholder="tu@correo.com">
                                <small class="form-text text-muted">No compartiremos tu información con nadie más</small>
                            </div>
                            <button class="btn btn-primary form-text" type="submit">Suscribirme</button>
                        </form>
                    </div>
                    <div class="col-md-3 offset-md-5">
                        <h4>Navegación</h4>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Catálogo</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Carrito</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.2.1.min.js')}}"></script>       
        <script type="text/javascript" src="{{ asset('plugins/js/tether.min.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('plugins/js/bootstrap.min.js')}}"></script> 
        <script src="{{ asset('plugins/fileinput/js/fileinput.js')}}"></script>
        <script src="{{ asset('plugins/js/sweetalert.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('plugins/js/app.js')}}"></script>
        <!-- Scripts /-->
        @include('sweet::alert')
        @yield('js')
    </body>
</html>
