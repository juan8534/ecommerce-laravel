@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 col-md-8">
      <div class="categories-container-create">
        <h4 id="categoryCreate">Crear categoria</h4>
        {!! Form::open(['route' => 'categories.store','method' => 'POST','id' =>'formUsers']) !!}
            <h5>Nombre del producto</h5>
            {!! Form::text('name',null,['class' => 'form-control input-user',
            'placeholder'=>'Nombre de la categoria', 'required']) !!} 
            <a href="{{url('/categories')}}" class="btn btn-danger">
              VOLVER
            </a>
            <input type="submit" value="ENVIAR" class="btn btn-compumundo">
        {!! Form::close()!!}
      </div>
    </div>
  </div>
</div>
@endsection