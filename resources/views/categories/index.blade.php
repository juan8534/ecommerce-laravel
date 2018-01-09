@extends('layouts.app')

@section('content')
<!--BreadCrumbs-->
<section id="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="breadcrumb">
                    <a href="{{url('/categories') }}" class="breadcrumb-item">Categorias</a>
                    <span class="breadcrumb-item active">Listado de categorias</span>
                </nav>
            </div>
        </div>
    </div>
  </section>
  <!--BreadCrumbs/-->
  <div class="container">
      <h4 id="table-user">Lista de categorias</h4>
    <table class="table table-responsive">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre de la categoria</th>
          <th>Fecha de creacion</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($categories as $category)
        <tr>
          <td>{{ $category->id}}</td>
          <td>{{ $category->name}}</td>
          <td>{{ $category->created_at}}</td>
          <td>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Editar</a>
          </td>
          <td>
          
          {!! Form::open(['route' => ['categories.destroy',$category->id], 'method' => 'delete','class'=>'delete_category']) !!}
            <button class="btn btn-danger delete-category">
              Eliminar
            </button>
          {!! Form::close() !!}  
          </td>
        </tr>      
      @endforeach
      </tbody>
    </table>
    <a id="crarUsuario" href="{{ route('categories.create')}}" class="btn btn-compumundo">Crear Categoria</a>
    <!--Paginador-->
  <div class="text-center">
    {{ $categories->render() }}
  </div>
  <!--Paginador-->
  </div>
@endsection