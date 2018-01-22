@extends('layouts.app')

@section('content')
  <section id="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="breadcrumb">
                    <a href="{{url('/products') }}" class="breadcrumb-item">Compras</a>
                    <span class="breadcrumb-item active">Mi compra realizada</span>
                </nav>
            </div>
        </div>
    </div>
</section>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <h4>Tu pago fue procesado </h4>
        <p>Verifica los detalles de tu envio:</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6">
        <h6>Correo: {{ $order->email }}</h6>
        <h6>Dirección: {{ $order->line1 }}</h6>
        <h6>Codigo postal: {{ $order->postal_code }}</h6>
        <h6>Ciudad: {{ $order->city }}</h6>
        <h6>Estado y pais: {{ "$order->state $order->country_code" }}</h6>
        <h6>Producto:  
          @foreach ($order->shopping_cart->products as $product) 
            {{ $product->title}},
          @endforeach
        </h6>
        <h6>Estado del pedido: {{ $order->states->description }}</h6>
        <h6>Fecha y hora de creación: {{ $order->created_at}}</h6>
        <a href="{{ url('/compras/'.$order->shoppingCartID() ) }}" class="btn btn-compumundo btn-order">
          Link de mi orden
        </a>
      </div>
    </div>
  </div>
@endsection
