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
              @if($product->discount_start_date <= date('Y-m-d') and $product->discount_end_date >= date('Y-m-d') )
                    <p class="card-text">${{ $product->discount_value}} Descuento</p>
                    <p class="card-text">${{ $product->pricing - $product->discount_value}} Valor con descuento</p>
			  <h5>Fecha vencimiento descuento</h5>
			  <p class="card-text">{{ $product->discount_end_date }}</p>
                @else
                    <p class="card-text">No aplica descuento</p>
                @endif
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
                  @php ($discount =  $products->sum('discount_value'))
                  <h5>{{ $total-$discount }}</h5>
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
