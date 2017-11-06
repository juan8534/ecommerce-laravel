  @extends('layouts.app')

@section('title', 'Productos Facilito')

@section('content')
  <div class="col s12 m6 center">
    <h3>Bienvenidos a compumundohipermegared</h3>
  </div>
  <div class="row">
    @foreach($products as $product)
      <div class="col s12 m6">
        <div class="card">
          <div class="row">
            <div class="col s12 m6">
              <div class="waves-effect waves-block waves-light">
                <img class="activator product-avatar" src="{{url("/products/images/$product->id.$product->extension")}}">
              </div>
            </div>
            <div class="s12 m6">
              <h4>Precio: {{ $product->pricing}} </h4>               
                {!! Form::open(['url' => '/in_shopping_carts', 'method' => 'POST', "class" => "add-to-cart inline-block"]) !!}
                  <input type="hidden" name="product_id" value="{{ $product->id }}">
                  <button class="btn waves-effect waves-light" type="submit" name="action">
                    Añadir al carrito                
                  </button>
                {!! Form::close([]) !!}
                <br>            
                <a href="{{ url("/products/$product->id")}}" class="btn blue">
                  Ver producto
                </a>
            </div>
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">{{ $product->title}}<i class="material-icons right">more_vert</i></span>             
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">{{ $product->title}}<i class="material-icons right">close</i></span>
            <p>{{ $product->description }}</p>
          </div>
        </div>
      </div>
   @endforeach  
  </div>
  <div class="center-align">
    {{ $products->links() }}
  </div>
@endsection
