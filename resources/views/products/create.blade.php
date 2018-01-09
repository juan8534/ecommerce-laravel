@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <div class="products-container-create">
          <h4 id="productCreate">Crear Producto</h4>
            {!! Form::open(['route' => 'products.store','method' => 'POST','id' =>'formUsers','files' => true]) !!}
            <h5>Nombre del producto</h5>
            {!! Form::text('title',null,['class' => 'form-control input-user',
            'placeholder'=>'Nombre completo', 'required']) !!} 
            <h5>Precio</h5>
            {!! Form::number('pricing',null,['class' => 'form-control input-user',
            'placeholder'=>'Ingrese el precio del producto', 'required']) !!} 
            <h5>Imagen</h5>
            {!! Form::file('image',['class' => 'input-image'])!!}
            <h5>Categoria</h5>
            {!! Form::select('category_id', $category, null, ['class'=>'form-control select-category input-user',
            'placeholder'=>'Seleccione una categoria', 'required'])!!}
            <h5>Descripción del producto</h5>
            {!! Form::textarea('description',null,['class' => 'form-control input-user','required']) !!} 
            <a href="{{url('/products')}}" class="btn btn-danger">
              VOLVER
            </a>
            <input type="submit" value="ENVIAR" class="btn btn-compumundo">
            {!! Form::close()!!}
        </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
<script>
  $('.input-image').fileinput();
</script>
@endsection