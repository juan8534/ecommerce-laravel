@extends('layouts.app')

@section('content')
  <div class="#00897b teal darken-1 white-text">
    <h4 class="center big-padding">Lista de productos</h4>
  </div>
  <div class="container">
    <table class="striped table">
      <thead>
        <tr>
          <th><h5>ID</h5></th>
          <th><h5>Titulo</h5></th>
          <th><h5>Descripción</h5></th>
          <th><h5>Precio</h5></th>
          <th><h5>Acciones</h5></th>
        </tr>
      </thead>
      <tbody>
  <!--Se recorren todos los productos de la base de datos mediante la variable 'products' creada en el controlador-->
        @foreach ($products as $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->pricing }}</td>
            <td class="td-left">
              <a href="{{ url("/products/$product->id")}}" class="btn blue">
                <li class= "material-icons ">
                    remove_red_eye
                </li>
              </a>
            </td>
            <td>
              <a href="{{ url('/products/'.$product->id.'/edit')}}" class="btn green">
                <li class= "material-icons">
                    mode_edit
                </li>
              </a>
            </td>
            <td class="td-right">
              @include('products.delete',['product' => $product])
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="right-align">
      <a href="{{url('/products/create')}}" class="waves-effect waves-light btn">
        Nuevo Producto
      </a>
    </div>
  </div>
@endsection
