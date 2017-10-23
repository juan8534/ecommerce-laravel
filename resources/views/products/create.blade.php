@extends('layouts.app')

@section('content')
  <div class="container white">
    <h4>Nuevo producto</h4>
    @include('products.form', ['product' => $product, 'url' => '/products', 'method' => 'POST' ])
  </div>
@endsection
