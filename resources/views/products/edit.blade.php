@extends('layouts.app')

@section('content')
  <div class="container">
    <h4>Editar Producto</h4>
    @include('products.form', ['product' => $product, 'url' => '/products/'.$product->id, 'method' => 'PATCH'])
  </div>
@endsection
