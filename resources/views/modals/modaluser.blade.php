  <div id="modal-delete" class="modal">
    <div class="modal-content">
    {!! Form::open(['route' => ['users.destroy', 0], 'method' => 'DELETE']) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="delete_id" id="send_id"/>
      <h4>Eliminar usuario</h4>
      <h5>Desea eliminar el usuario?</h5>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn green">Cancelar</a>
        <a href="{{ route('users.destroy', $user->id) }}" class="btn red">Eliminar </a>      
    </div>
    {!! Form::close() !!}
  </div>
  