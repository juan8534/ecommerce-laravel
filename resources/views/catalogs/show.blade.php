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
                        <a href="{{ route('search.category', $products->category->name) }}" class="breadcrumb-item">{{ $products->category->name }}</a>
                        <span class="breadcrumb-item active">{{ $products->title}}</span>
                    </nav>
                </div>
            </div>
        </div>
</section>
<!--BreadCrumbs/-->

<!-- Product-->
<section id="productos-container">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                @foreach ($products->images as $image)
                    <img src="{{ asset('images/products_images/'.$image->name )}}"  class="card-img-top img-fluid">
                @endforeach
            </div>
            <div class="col-12 col-md-7">
                <h4 class="product-view">{{ $products->title}}</h4>
                <h5>Descripción del producto:</h5>
                <p>{{ $products->description }}</p>
                <h5>Precio:</h5>
                <p>{{ $products->pricing }} dolares</p>
                @if($products->discount_start_date <= date('Y-m-d') and $products->discount_end_date >= date('Y-m-d') )
                    <p class="card-text">${{ $products->discount_value}} Descuento</p>
                    <p class="card-text">${{ $products->pricing - $products->discount_value}} Valor con descuento</p>
                @else
                    <p class="card-text">No aplica descuento</p>
                @endif
                {!! Form::open(['url' => '/in_shopping_carts', 'method' => 'POST', "class" => "add-to-cart inline-block"]) !!}
                  <input type="hidden" name="product_id" value="{{ $products->id }}">
                  <button class="btn btn-success" type="submit" name="action">
                    Añadir al carrito                
                  </button>
                {!! Form::close([]) !!}
            </div>
        </div>
    </div>
</section>
<!-- Product-->
@endsection