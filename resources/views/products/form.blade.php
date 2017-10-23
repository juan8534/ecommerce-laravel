     <!-- Formulario por generado por 'Form' de laravel collective -->
     {!! Form::open(['url' => $url, 'method' => $method, 'files' => true]) !!}
        <div class="input-field col s6">
          {{ Form::text('title',$product->title,['class' => 'validate']) }} <!-- En el arreglo se agregan atributos del campo-->
          {{ Form::label('Nombre del producto')}}
        </div>
        <div class="input-field col s6">
          {{ Form::number('pricing',$product->pricing,['class' => 'validate']) }}
          {{ Form::label('Precio del producto')}}
        </div>                
        <div class="file-field input-field">
          <div class="btn">
            <span>Imagen</span>
            {{ Form::file('cover') }}
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <div class="input-field">
          {{ Form::textarea('description',$product->description,['class' => 'materialize-textarea']) }}
          {{ Form::label('Descripción del producto')}}
        </div>
        <br>
        <br>
        <div class="right-align">
          <a href="{{url('/products')}}" class="waves-effect waves-light btn">
            VOLVER
          </a>
        <input type="submit" value="Enviar" class="btn btn-success">
        </div>
     {!! Form::close()!!}
