@extends('layouts.app')

@section('content')
  <div class="container white">
    <h4>Nuevo Usuario</h4>    
         <!-- Formulario por generado por 'Form' de laravel collective -->
    {!! Form::open(['route' => ['users.update', $user],'method' => 'PUT']) !!}
        <div class="input-field col s6">
          {{ Form::text('name',$user->name,['class' => 'validate']) }} <!-- En el arreglo se agregan atributos del campo-->
          {{ Form::label('Nombres')}}
        </div>     
        <div class="input-field col s6">
          {{ Form::email('email',$user->email,['class' => 'validate']) }} <!-- En el arreglo se agregan atributos del campo-->
          {{ Form::label('Correo')}}
        </div> 
        <div class="input-field col s6">
          {{ Form::password('password',['class' => 'validate']) }} <!-- En el arreglo se agregan atributos del campo-->
          {{ Form::label('Contraseña')}}
        </div>   
        <div class="input-field col s6">
          {{ Form::select('type',['member' => 'Miembro',
            'admin' => 'Administrador'],$user->type,['placeholder' => 'Tipo de usuario'])}} <!-- En el arreglo se agregan atributos del campo-->
        </div>        
        <br>
        <br>
        <div class="right-align">
          <a href="{{url('/users')}}" class="waves-effect waves-light btn">
            VOLVER
          </a>
        <input type="submit" value="Enviar" class="btn btn-success">
        </div>
    {!! Form::close()!!}

  </div>
@endsection
