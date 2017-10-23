{!! Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE'])!!} <!--Arreglo de configuración en el form open-->
  <button type="submit" class="btn red">
    <li class= "material-icons">
      delete
    </li>
  </button>
{!! Form::close()!!}
