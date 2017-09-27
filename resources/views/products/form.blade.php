     <!-- Formulario por generado por 'Form' de laravel collective -->
     {!! Form::open(['url' => $url, 'method' => $method, 'files' => true]) !!}
        <div class="form-group">
          {{ Form::text('title',$product->title,['class' => 'form-control',
            'placeholder' =>'Titulo..']) }} <!-- En el arreglo se agregan atributos del campo-->
        </div>
        <div class="form-group">
          {{ Form::number('pricing',$product->pricing,['class' => 'form-control',
            'placeholder' => 'Precio de tu producto en centavos de dolar']) }}
        </div>
        <div class="form-group">
          {{ Form::file('cover') }}
        </div>
        <div class="form-group">
          {{ Form::textarea('description',$product->description,['class' => 'form-control',
            'placeholder' => 'Descripción del producto']) }}
        </div>
        <div class="form-group text-right">
          <button class="btn btn-success" >
            <a href="{{url('/products')}}">Volver</a>
          </button>
        <input type="submit" value="Enviar" class="btn btn-success">
        </div>
     {!! Form::close()!!}
