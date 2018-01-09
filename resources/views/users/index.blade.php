@extends('layouts.app')

@section('content')

  <!--BreadCrumbs-->
  <section id="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="breadcrumb">
                    <a href="{{url('/users') }}" class="breadcrumb-item">Usuarios</a>
                    <span class="breadcrumb-item active">Todos los usuarios</span>
                </nav>
            </div>
        </div>
    </div>
  </section>
  <!--BreadCrumbs/-->
  <div class="container">
      <h4 id="table-user">Lista de usuarios</h4>
    <table class="table table-responsive">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Tipo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->id}}</td>
          <td>{{ $user->name}}</td>
          <td>{{ $user->email}}</td>
          <td>{{ $user->profiles->description }}</td>
          <td>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
          </td>
          <td>
          {!! Form::open(['route' => ['users.destroy',$user->id], 'method' => 'delete','class'=>'delete_user']) !!}
            <button class="btn btn-danger delete-user">
              Eliminar
            </button>
          {!! Form::close() !!}  
          </td>
        </tr>      
      @endforeach
      </tbody>
    </table>
    <a id="crarUsuario" href="{{ route('users.create')}}" class="btn btn-compumundo">Crear Usuario</a>
    <!--Paginador-->
  <div class="text-center">
    {{ $users->render() }}
  </div>
  <!--Paginador-->
  </div>
  
@endsection
