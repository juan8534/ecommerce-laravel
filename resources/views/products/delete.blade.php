{!! Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE'])!!} <!--Arreglo de configuración en el form open-->
  <input type="submit" class="btn btn-danger" value="Eliminar">
{!! Form::close()!!}
