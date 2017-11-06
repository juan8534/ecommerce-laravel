@extends('layouts.app')


@section('content')

<div class="container">
  <div class="panel panel-default">    
    <div class="panel-body">
      <h3 class="center">Estadisticas</h3>
        <div class="row">
            <div class="col s4 sale-data">
              <span>{{$totalMonth}} USD</span>
              Ingresos del {{date('M')}}
            </div>
            <div class="col s4   sale-data">
              <span>{{$totalMonthCount}} USD</span>
              Numero de {{date('M')}} 
            </div>
            <div class="col s4   sale-data">
              <span> {{$totalSales}} USD</span>
              Total ingresos
            </div>
         </div>
      <h3 class="center-align">Ventas</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <td>ID. venta</td>
            <td>Comprador</td>
            <td>Dirección</td>
            <td>No. guia</td>
            <td>Status</td>
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
              <td>
                <a href="#" 
                   data-type = "text" 
                   data-pk="{{ $order->id}}" 
                   data-url="{{route('orders/update', ['id'=>$order->id])}}"
                   data-title="Numero de guia" 
                   data-value="{{$order->guide_number}}"
                   class="set-guide-number"
                   data-name="guide_number">
                </a>
              </td>
              <td>
                <a href="#" data-type = "select" 
                   data-pk="{{$order->id}}" 
                  data-url="{{route('orders/update', ['id'=>$order->id])}}"
                   data-title="Numero de guia" 
                   data-value="{{ $order->status }}"
                   class="select-status"
                   data-name="status">
                </a>
              </td>
              <td>{{ $order->created_at}}</td>
              <td>Acciones</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
