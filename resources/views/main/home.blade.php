@extends('layouts.app')

@section('title', 'Productos Facilito')

@section('content')
  <h1>Bienvenidos a compumundohipermegared</h1>

  <div class="contanier text-center products-contanier">
  @foreach($products as $product)
      @include("products.product", ["product" => $product])
  @endforeach    
  </div>
@endsection
