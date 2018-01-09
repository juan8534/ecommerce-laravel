@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 col-md-8">
      <div class="categories-container-create">
        <h4 id="categoryCreate">Editar categoria</h4>
        {!! Form::open(['route' => ['categories.update', $category],'method' => 'PUT']) !!}
            <h5>Nombre del producto</h5>
            {!! Form::text('name',$category->name,['class' => 'form-control input-user','required']) !!} 
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