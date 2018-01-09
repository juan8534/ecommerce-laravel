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
        <link type="text/css" rel="stylesheet" href="/ecommerce/public/plugins/css/bootstrap.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="/ecommerce/public/css/app.css"  media="screen,projection"/>    
        <link rel="stylesheet" href="/ecommerce/public/plugins/css/sweetalert.css">
        <link rel="stylesheet" href="{{ asset('plugins/fileinput/css/fileinput.css')}}">
        <link rel="stylesheet" href="/ecommerce/public/plugins/font-awesome/css/font-awesome.min.css">
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
                        <a id="login"class="hidden-xs-down font-weight-bold"href="{{ url('/login') }}">Login</a>
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
                            <div class="col-10 offset-1 col-sm-6 col-md-4 offset-md-0">
                                <ul class="navbar-nav">
                                    <li class="nav-item text-center">
                                        <a href="{{ url('/') }}" class="nav-link active">Home</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a href="{{ url('/') }}" class="nav-link active hidden-sm-up">Login</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a href="{{url('/catalogs') }}" class="nav-link">Catálogo</a>
                                    </li>
                                    <li>
                                        <i id="icon-car" class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a href="#" class="nav-link">Carrito</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a href="#" class="nav-link">Ordenes</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a href="#" class="nav-link">Usuarios</a>
                                    </li>
                                    <li class="nav-item text-center">
                                        <a href="{{ url('/') }}" class="nav-link active">Productos</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 offset-md-2 hidden-xs-down">
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
        <script type="text/javascript" src="/ecommerce/public/plugins/jquery/jquery-3.2.1.min.js"></script>       
        <script type="text/javascript" src="/ecommerce/public/plugins/js/tether.min.js"></script> 
        <script type="text/javascript" src="/ecommerce/public/plugins/js/bootstrap.min.js"></script> 
        <script src="{{ asset('plugins/fileinput/js/fileinput.js')}}"></script>
        <script src="/ecommerce/public/plugins/js/sweetalert.min.js"></script>
        <script type="text/javascript" src="/ecommerce/public/plugins/js/app.js"></script>
        <!-- Scripts /-->
        @include('sweet::alert')
        @yield('js')
    </body>
</html>
