@extends('layouts.app')
@section('content')
<!--BreadCrumbs-->
<section id="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="breadcrumb">
                    <a href="{{url('/compras') }}" class="breadcrumb-item">Mis pedidos</a>
                    <span class="breadcrumb-item active">Todos mis pedidos</span>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--BreadCrumbs/-->
<div class="container">
    <h4 id="table-product">Mi listado de pedidos</h4>
    <table class="table table-responsive">
        <thead>
            <tr>
                <td>Numero de venta</td>
                <td>Producto</td>
                <td>Fecha</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>
                    @foreach ($order->shopping_cart->products as $product) 
                        {{ $product->title}},
                    @endforeach
                    </td>
                    <td>{{ $order->created_at}}</td>
                    <td>
                        <a href="{{ url('/compras/'.$order->shoppingCartID() ) }}" class="btn btn-primary">
                            VER DETALLES
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection