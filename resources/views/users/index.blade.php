@extends('layouts.app')

@section('content')
  <div class="#00897b teal darken-1 white-text">
    <h4 class="center big-padding">Lista de Usuarios</h4>
  </div>
  <div class="container">
    <table cellspacing="0" cellpadding="0" class="striped table">
      <thead>
        <tr>
          <th><h5>ID</h5></th>
          <th><h5>Nombre</h5></th>
          <th><h5>Correo</h5></th>
          <th><h5>Tipo de usuario</h5></th>          
          <th><h5>Acciones</h5></th>
        </tr>
      </thead>
      <tbody>
  <!--Se recorren todos los productos de la base de datos mediante la variable 'products' creada en el controlador-->
          @foreach ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            @if($user->type == 'member')
                <td>Miembro</td>                                
            @else
                <td>Administrador</td>
            @endif                        
            <td class="right-align">                       
              <a href="{{ route('users.edit', $user->id) }}" class="btn green">
                <li class= "material-icons">
                    mode_edit
                </li>
              </a>
            </td>                
            <td class="center-left">              
                {!! Form::open(['route' => ['users.destroy',$user->id], 'method' => 'delete','class'=>'delete_user']) !!}
                  <button class="btn red delete-user">
                    <li class= "material-icons">
                    delete
                    </li>
                  </button>
                {!! Form::close() !!}                                                      
            </td>                        
          </tr>          
        @endforeach  
      </tbody>      
    </table>
    <div class="center-align">
          {{ $users->links() }}
      </div>
    <div class="right-align">
      <a href="{{ route('users.create')}}" class="waves-effect waves-light btn">
        Nuevo Usuario
      </a>
    </div>
  </div>

    <div id="modal-delete" class="modal">
    <div class="modal-content">
    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
      <h4>Eliminar usuario</h4>
      <h5>Desea eliminar el usuario?</h5>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="delete_id" id="send_id"/>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn green">Cancelar</a>
        <a href="{{ route('users.destroy', $user->id) }}" class="btn red">Eliminar </a>      
    </div>
    {!! Form::close() !!}
  </div>  
@endsection
