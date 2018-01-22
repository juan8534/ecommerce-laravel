@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 col-md-8">
      <div class="products-container-create">
        <h4 id="productCreate">Crear Producto</h4>
          {!! Form::open(['route' =>[ 'products.update', $product],'method' => 'PUT','files' => true]) !!}
          <h5>Nombre del producto</h5>
          {!! Form::text('title',$product->title,['class' => 'form-control input-user',
          'placeholder'=>'Nombre completo', 'required']) !!} 
          <h5>Precio</h5>
          {!! Form::number('pricing',$product->pricing,['class' => 'form-control input-user',
          'placeholder'=>'Ingrese el precio del producto', 'required']) !!} 
          {{--  <h5>Imagen</h5>
          {!! Form::file('image',['class' => 'input-image'])!!}  --}}
          <h5>Categoria</h5>
          {!! Form::select('category_id', $category, $product->category->id, ['class'=>'form-control select-category input-user',
          'placeholder'=>'Seleccione una categoria', 'required'])!!}
          <h5>Descripción del producto</h5>
          {!! Form::textarea('description',$product->description,['class' => 'form-control input-user','required']) !!} 
          <a href="{{url('/products')}}" class="btn btn-danger btn-product">
            VOLVER
          </a>
          <input type="submit" value="ENVIAR" class="btn btn-compumundo btn-product">
          {!! Form::close()!!}
      </div>
    </div>
  </div>
</div>
@endsection
