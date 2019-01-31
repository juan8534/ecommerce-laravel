@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <div class="user-container-create">
          <h4 id="userCreate">Crear usuario</h4>
          {!! Form::open(['route' => 'users.store','method' => 'POST','id' =>'formUsers']) !!}
          <h5>Nombres</h5>
          {!! Form::text('name', null, ['class'=>'form-control input-user',
            'placeholder'=>'Nombre completo', 'required'])!!}
          <h5>Correo</h5>
          {!! Form::email('email', null, ['class'=>'form-control input-user',
            'placeholder'=>'correo@correo.com', 'required'])!!}
          <h5>Contraseña</h5>
          <input type="password" name="password" class="form-control input-user" required>
          <h5>Perfil</h5>
          {!! Form::select('id_profile', $profile, null, ['class'=>'form-control select-category input-user',
          'placeholder'=>'Seleccione una categoria', 'required'])!!}
          <a href="{{url('/users')}}" class="btn btn-danger">
            VOLVER
          </a>
          <input type="submit" value="ENVIAR" class="btn btn-compumundo">
          {!! Form::close()!!}
        </div>
      </div>
    </div>
  </div>
@endsection
