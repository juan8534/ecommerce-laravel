@extends('layouts.app')

@section('title', 'Compumundo')

@section('content')  

<!--BreadCrumbs-->
<section id="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="breadcrumb">
                    <a href="{{url('/catalogs') }}" class="breadcrumb-item">Catálogo</a>
                    <span class="breadcrumb-item active">Todos los productos</span>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--BreadCrumbs/-->

<!--Productos-->
<section id="productos-container">
    <div class="container">
        <div class="row">
            <!-- Filtros-->
            <div class="col-12 col-md-3">
                <div class="list-group filtros-toggle">
                    <a href="#" id="filtrosToggle" class="navbar-toggler list-group-item list-group-item-action hidden-md-up" 
                    data-toggle="collapse" data-target="#filtros-container" aria-controls="filtros-containe" aria-expanded="false" aria-label="Toggle navigation">                              
                       <h5 class="list-group-item-heading">Filtros <i class="fa fa-chevron-down text-right"></i></h5>  
                    </a>
                </div>
                <div class="navbar navbar-toggleable-sm">
                    <div id="filtros-container" class="collapse navbar-collapse flex-column">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                <h5 class="list-group-item-heading">Categorías</h5>
                            </a>
                            <a href="" class="list-group-item list-group-item-action justify-content-between">
                                Ropa <span class="badge badge-pill badge-default ">174</span>
                            </a>
                            <a href="" class="list-group-item list-group-item-action justify-content-between">
                                Tecnologia <span class="badge badge-pill badge-default ">174</span>
                            </a>
                            <a href="" class="list-group-item list-group-item-action justify-content-between">
                                Accesorios <span class="badge badge-pill badge-default ">174</span>
                            </a>
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                <h5 class="list-group-item-heading">Color</h5>
                            </a>
                            <a href="" class="list-group-item list-group-item-action justify-content-between list-group-item-success">
                                Verde <span class="badge badge-pill badge-default ">174</span>
                            </a>
                            <a href="" class="list-group-item list-group-item-action justify-content-between list-group-item-danger">
                                Rojo <span class="badge badge-pill badge-default ">174</span>
                            </a>
                            <a href="" class="list-group-item list-group-item-action justify-content-between list-group-item-warning">
                                Amarrillo <span class="badge badge-pill badge-default ">174</span>
                            </a>
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                <h5 class="list-group-item-heading">Genero</h5>
                            </a>
                            <a href="" class="list-group-item list-group-item-action justify-content-between">
                                <div class="form-check">    
                                    <label  class="form-check-label">
                                        <input type="checkbox" value="m" class="form-check-input">
                                        Masculino
                                    </label>
                                </div>
                            </a>
                            <a href="" class="list-group-item list-group-item-action justify-content-between">
                                <div class="form-check">    
                                    <label  class="form-check-label">
                                        <input type="checkbox" value="m" class="form-check-input">
                                        Femenino
                                    </label>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filtros/-->

            <!-- Productos2-->
            <div class="col-12 col-md-9">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 listado-productos">
                       <div class="card">
                           <img src="images/producto.svg" alt="Producto 1" class="card-img-top img-fluid">
                           <div class="card-block">
                               <h4 class="card-title">Producto 1</h4>
                               <p class="card-text">Producto en venta super revolucionario</p>
                           </div>
                       </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 listado-productos">
                        <div class="card">
                            <img src="images/producto.svg" alt="Producto 1" class="card-img-top img-fluid">
                            <div class="card-block">
                                <h4 class="card-title">Producto 1</h4>
                                <p class="card-text">Producto en venta super revolucionario</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 listado-productos">
                        <div class="card">
                            <img src="images/producto.svg" alt="Producto 1" class="card-img-top img-fluid">
                            <div class="card-block">
                                <h4 class="card-title">Producto 1</h4>
                                <p class="card-text">Producto en venta super revolucionario</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 listado-productos">
                        <div class="card">
                            <img src="images/producto.svg" alt="Producto 1" class="card-img-top img-fluid">
                            <div class="card-block">
                                <h4 class="card-title">Producto 1</h4>
                                <p class="card-text">Producto en venta super revolucionario</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{--  <div class="row">
                    <div id="paginator-container" class="col text-center">
                        
                    </div>
                </div>  --}}
            </div>
            <!-- Productos2/-->
        </div>
    </div>
</section>
<!--/Productos-->
@endsection
