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
    <link rel="stylesheet" href="/ecommerce/public/plugins/css/sweetalert.css">
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
                    
                    <!-- Dropdown Trigger -->  
                    <ul id="slide-out" class="side-nav">
                        <li>
                            <div class="user-view">
                                <div class="background">
                                    <img src="images/office.png">
                                </div>  
                            @if(Auth::check())
                                <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
                                <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
                                <a href="#!email"><span class="white-text email">{{ Auth::user()->type }}</span></a>
                            @endif                                
                            </div>
                        </li>                                                        
                            <li><a class="subheader">Administración</a></li>
                            <li><div class="divider"></div></li>
                            <li><a href="{{ url('/users')}}"><i class="material-icons">account_box</i>Usuarios</a></li>
                            <li><a href="{{ url('/orders')}}"><i class="material-icons">class</i>Ordenes</a></li>
                            <li><a href="{{ url('/products')}}"><i class="material-icons">work</i>Administrar productos</a></li>
                            <li><div class="divider"></div></li>
                            <li><a class="subheader">Zona de compras</a></li>
                            <li><div class="divider"></div></li>
                            <li><a href="{{ url('/carrito')}}"><i class="material-icons">shopping_cart</i>
                                    <span>
                                        {{$productsCount}} Productos en el carrito <!-- Muestra cuantos productos lleva el usuario en el carrito de compras-->
                                    </span> 
                                </a>
                            </li>
                            <li><a href="#"><i class="material-icons">content_paste</i>Mi lista de productos</a></li>                            
                    </ul>
                    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>                           
                    <li><a href="{{ url('/') }}">Productos</a></li>                    
                </ul>
                @if (Auth::check()) <!--Solo el usuario miembro puede crear articulos-->  
                 <ul class="right">  
                    <li>
                        <a class="dropdown-button right-align" href="#!" data-activates="dropdown1" 
                        aria-haspopup="true" aria-expanded="false" >Acciones
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>   
                </ul>                         
                </ul>   
                <ul class="right">           
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
                </ul>                  
                    @else          
                <ul class="right">
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown1">Acciones
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>                        
                    
                </ul>
                    <ul class="right">           
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
                </ul>
                @endif
            </div>
        </nav>
        @yield('content')     
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="/ecommerce/public/plugins/jquery/jquery-3.2.1.min.js"></script>       
    <script type="text/javascript" src="/ecommerce/public/plugins/js/materialize.js"></script> 
    <script src="/ecommerce/public/plugins/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="/ecommerce/public/plugins/js/app.js"></script>
    @include('sweet::alert')
</body>
</html>
