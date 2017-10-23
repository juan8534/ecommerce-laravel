@extends('layouts.app')
@section('content')
  <div class="#00897b teal darken-1 white-text">
    <h4 class="center big-padding">Tu carrito de compras</h4>
  </div>
  <div class="container">
    <table class="responsive-table">
      <thead>
        <tr>
          <td><h5>Producto</h5></td>
          <td><h5>Precio</h5></td>
        </tr>
      </thead>
      <tbody>
       @foreach ($products as $product)
         <tr>
           <td>{{ $product->title}}</td>
           <td>{{ $product->pricing}}</td>
         </tr>
       @endforeach
       <tr>
         <td>Total</td>
         <td>{{ $total }}</td>
       </tr>
      </tbody>
    </table>
    <br>
    <br>
    <div class="right-align">
      @include('shopping_carts.form')
    </div>
  </div>
@endsection
