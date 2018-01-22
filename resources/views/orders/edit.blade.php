@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <div class="user-container-create">
          <h4 id="userCreate">Editar Orden</h4>
          {!! Form::open(['route' => ['orders.update', $order],'method' => 'PUT']) !!}
          <h5>Cambiar estado</h5>
            {!! Form::select('estate_id', $state, $order->states->id, 
            ['class'=>'form-control select-category input-user','required'])!!}  

          <a href="{{url('/orders')}}" class="btn btn-danger">
            VOLVER
          </a>
          <input type="submit" value="ENVIAR" class="btn btn-compumundo">
          {!! Form::close()!!}
        </div>
      </div>
    </div>
  </div>
@endsection