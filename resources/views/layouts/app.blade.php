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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons ">
    <link type="text/css" rel="stylesheet" href="/ecommerce/public/plugins/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="/ecommerce/public/css/app.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <ul id="dropdown1" class="dropdown-content">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Registrase</a></li>
            @else
                <li>
                    <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                  Cerrar sesion
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    </li>
            @endif
        </ul>
        <nav>
            <div class="nav-wrapper #004d40 teal darken-4 navigator" >     
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="{{ url('/') }}">Productos</a></li>                    
                    <!-- Dropdown Trigger -->                    
                </ul>
                <ul class="right">
                    <li>
                        <i class="material-icons">class</i>
                    </li>
                    <li>
                        <a href="{{ url('/orders')}}">                            
                                Ordenes
                        </a>
                    </li>
                    <li>
                    <li>
                        <i class="material-icons">work</i>
                    </li>
                    <li>
                        <a href="{{ url('/products')}}">                            
                                Administrar productos
                        </a>
                    </li>
                    <li>
                        <i class="material-icons">shopping_cart</i>
                    </li>
                    <li>
                        <a href="{{ url('/carrito')}}">                            
                                Mi carrito
                            <span class="circle-shopping-cart">
                                {{$productsCount}} <!-- Muestra cuantos productos lleva el usuario en el carrito de compras-->
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown1">Acciones
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="/ecommerce/public/plugins/jquery/jquery-3.2.1.min.js"></script>   
    <script type="text/javascript" src="/ecommerce/resources/assets/js/app.js"></script>
    <script type="text/javascript" src="/ecommerce/public/plugins/js/materialize.js"></script> 
   
    
</body>
</html>
