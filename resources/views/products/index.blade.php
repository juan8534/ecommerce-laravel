@extends('layouts.app')

@section('content')
  <div class="big-padding text-center blue-grey white-text">
    <h1>Productos</h1>
  </div>
  <div class="container">
    <table class="table table-bordered">
      <thead>
        <td>ID</td>
        <td>Titulo</td>
        <td>Descripción</td>
        <td>Precio</td>
        <td>Acciones</td>
      </thead>
      <tbody>
  <!--Se recorren todos los productos de la base de datos mediante la variable 'products' creada en el controlador-->
        @foreach ($products as $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->pricing }}</td>
            <td>
              <a href="{{ url("/products/$product->id")}}">Ver</a>
              <a href="{{ url('/products/'.$product->id.'/edit')}}"><button class="btn btn-primary">Editar</button></a>
              @include('products.delete',['product' => $product])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="pull-right">
      <a href="{{url('/products/create')}}" class="btn btn-primary btn-fab">
        <i class="material-icons">add</i>
      </a>
    </div>
  </div>
@endsection
