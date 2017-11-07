@extends('layouts.app')

@section('content')
<div class="#00897b teal darken-1 white-text">
    <h4 class="center big-padding">Recibo de pago</h4>
  </div>
  <div class="container">
    <div class="card large-padding">
      <h4>Tu pago fue procesado <span class="{{ $order->status }}">{{$order->status}}</span></h4>
      <p>Verifica los detalles de tu envio:</p>
      <div class="row large-padding">
        <div class="col-xs-6">Correo</div>
        <div class="col-xs-6">{{ $order->email }}</div>
      </div>

      <div class="row large-padding">
        <div class="col-xs-6">Dirección</div>
        <div class="col-xs-6">{{ $order->line1 }}</div>
      </div>

      <div class="row large-padding">
        <div class="col-xs-6">Código postal</div>
        <div class="col-xs-6">{{ $order->postal_code }}</div>
      </div>

      <div class="row large-padding">
        <div class="col-xs-6">Ciudad</div>
        <div class="col-xs-6">{{ $order->city }}</div>
      </div>

      <div class="row large-padding">
        <div class="col-xs-6">Estado y pais</div>
        <div class="col-xs-6">{{ "$order->state $order->country_code" }}</div>
      </div>

      <div class="row large-padding">
        <div class="col-xs-6">Producto</div>
        <div class="col-xs-6">{{ "" }}</div>
      </div>

      <div class="text-center top-space">
        <a href="{{ url('/compras/'.$shopping_cart->customid)}}">Link permanente de tu compra</a>
      </div>


    </div>
  </div>
@endsection
