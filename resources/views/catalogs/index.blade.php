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
                            @foreach ($categories as $category)
                            <a href="{{ route('search.category', $category->name) }}" class="list-group-item list-group-item-action justify-content-between">
                                {{$category->name }} <span class="badge badge-pill badge-default ">{{ $category->products->count()}}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filtros/-->

            <!-- Productos2-->
            
            <div class="col-12 col-md-9">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-md-4 listado-productos">
                        <div class="card">
                            <a href="{{ route('catalogs.show', $product->id)}}">
                                @foreach ($product->images as $image)
                                    <img src="{{ asset('images/products_images/'.$image->name )}}" height="160" width="253" class="card-img-top">
                                @endforeach
                            </a>
                            <div class="card-block">
                                <h4 class="card-title">{{ $product->title }}</h4>
                                <p class="card-text">${{ $product->pricing}} dolares</p>
                             <!--   @if($product->discount_value > 0)
                                <p class="card-text">${{ $product->discount_value}} Descuento</p>
                                @endif-->
                                @if($product->discount_start_date <= date('Y-m-d') and $product->discount_end_date >= date('Y-m-d') )
                                <p class="card-text">${{ $product->discount_value}} Descuento</p>
                                @else
                                <p class="card-text">No aplica descuento</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center">
                    {{ $products->render() }}
                </div>
            </div>
            <!-- Productos2-->
        </div>
    </div>
</section>
<!--/Productos-->
@endsection
