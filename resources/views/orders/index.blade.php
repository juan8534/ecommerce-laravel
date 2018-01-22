@extends('layouts.app')


@section('content')
<!--BreadCrumbs-->
<section id="breadcrumbs-container">
  <div class="container">
      <div class="row">
          <div class="col">
              <nav class="breadcrumb">
                  <a href="{{url('/products') }}" class="breadcrumb-item">Catalogos</a>
                  <span class="breadcrumb-item active">Administrar ordenes</span>
              </nav>
          </div>
      </div>
  </div>
</section>
<!--BreadCrumbs/-->

<div class="container">
  <h4 id="table-product">Listado de ordenes</h4>
    <table class="table table-responsive">
      <thead>
          <tr>
              <td>ID. venta</td>
              <td>Comprador</td>
              <td>Dirección</td>
              <td>Correo</td>
              <td>Estado</td>
              <td>Productos</td>
              <td>Fecha de venta</td>
              <td>Acciones</td>
          </tr>
      </thead>
      <tbody>
          @foreach ($orders as $order)
          <tr>
            <td>{{ $order->id}}</td>
            <td>{{ $order->recipient_name}}</td>
            <td>{{ $order->line1}}</td>
            <td>{{ $order->email }}</td>
            
            <td>{{ $order->states->description }}</td>
            {{--  Extraemos el nombre del producto por medio del carrito de compras  --}}
            <td>
              @foreach ($order->shopping_cart->products as $product) 
                {{ $product->title}},
              @endforeach
            </td>
            <td>{{ $order->created_at}}</td>
            <td>
                <a id="btn-product" href="{{ route('orders.edit', $order->id) }}" class="btn btn-success">Editar</a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection
