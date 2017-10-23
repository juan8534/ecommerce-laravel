@extends('layouts.app')

@section('content')
  <div class="container center-left">
    @include("products.product", ["product" => $product])
  </div>
@endsection
