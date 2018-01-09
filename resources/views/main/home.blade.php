@extends('layouts.app')

@section('title', 'Productos Facilito')

@section('content')  
        <!--Carousel-->
        <div id="carousel-container">
            <div id="productosCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#productosCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#productosCarousel" data-slide-to="1"></li>
                    <li data-target="#productosCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="./images/primero.svg" alt="Primer producto">
                        <div class="carousel-caption">
                            <h3>Primer producto</h3>
                            <p class="hidden-sm-down">Descripcion del primer producto</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="./images/primero.svg" alt="Segundo producto">
                        <div class="carousel-caption">
                            <h3>Segundo producto</h3>
                            <p class="hidden-sm-down">Descripcion del segundo producto</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="./images/primero.svg" alt="Tercer productos">
                        <div class="carousel-caption">
                            <h3>Tercer producto</h3>
                            <p class="hidden-sm-down">Descripcion del tercer producto</p>
                        </div>
                    </div>
                </div>
                    <a class="carousel-control-prev" href="#productosCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#productosCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
            </div>
        </div>
        <!--Carousel/-->

        <!-- Información-->
        <div id="info-container">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-md-4">
                        <img src="images/calidad.png" alt="Calidad" class="img-fluid">
                        <h4>Productos garantizados</h4>
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="images/envio.png" alt="Calidad" class="img-fluid">
                        <h4>Envios a nivel nacional</h4>
                    </div>
                    <div class="col-12 col-md-4">
                            <img src="images/paypal.png" alt="Calidad" class="img-fluid">
                        <h4>Pagos por paypal</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Información-->
@endsection
