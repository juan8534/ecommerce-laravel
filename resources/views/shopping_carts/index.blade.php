@extends('layouts.app')
@section('content')
<!--BreadCrumbs-->
<section id="breadcrumbs-container">
  <div class="container">
      <div class="row">
          <div class="col">
              <nav class="breadcrumb">
                  <a href="{{url('/catalogs') }}" class="breadcrumb-item">Catálogo</a>
                  <span class="breadcrumb-item active">Mi carrito de compras</span>
              </nav>
          </div>
      </div>
  </div>
</section>
<!--BreadCrumbs/-->

  <div class="container">
    <h3>Carrito de compras</h3>
    @foreach ($products as $product)
      <div class="row total-cart">
          <div class="col-12 col-md-4 offset-md-0">
              @foreach ($product->images as $image)
                <img src="{{ asset('images/products_images/'.$image->name )}}" class="card-img-top img-fluid">        
              @endforeach
          </div>
          <div class="col-12 col-md-4 offset-md-0">
              <h4>Nombre del producto</h4>
              <h5>{{$product->title}}</h5>
              <h5 class="total-description">Descripción</h5>
              <p>{{ $product->description }}</p>
          </div>
          <div class="col-12 col-md-4 offset-md-0">
              <h4>Precio</h4>
              <h5>{{ $product->pricing }}</h5>
          </div>
      </div>
      @endforeach
      <div class="row">
          <div class="col-12 col-md-4 offset-md-0">
              
          </div>
          <div class="col-12 col-md-4 offset-md-0">
          </div>
          <div class="col-12 col-md-4 offset-md-0">
            <div class="row">
              <div class="col-6 col-md-6">
                  <h4 class="total-container">Total</h4>
                  <h5>{{ $total }}</h5>
              </div>
              <div class="col-6 col-md-6">
                  <div class="total-button">
                      @include('shopping_carts.form')
                  </div>
              </div>
            </div>
          </div>
      </div>
</div>  
@endsection
