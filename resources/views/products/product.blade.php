<div class="card product text-left">    
    <h3>{{ $product->title}}</h3>
    <div class="row">
        <div class="col s12">
            <div class="col s6">
                @if($product->extension)
                    <img class="product-avatar"src="{{url("/products/images/$product->id.$product->extension")}}">
                @endif
            </div>
            <div class="col s6">
                <div class="row">
                    <h6>Descripción</h6>
                    <p>
                        {{$product->description}}
                    </p>                
                </div>
                <div class="row">
                    @if(Auth::check() && Auth::user()->type == "admin")
                    <div class="col s6 right-align">
                        <a href="{{ url("/products/".$product->id."/edit")}}" class="btn blue">
                            <i class="material-icons">edit</i>
                        </a>
                    </div>
                    <div class="col s3">
                        <a href="{{ route('products.destroy', $product->id )}}" class="btn red">
                            <li class= "material-icons">
                            delete
                            </li>
                        </a>   
                    </div>
                    @endif
                    <div class="col s3">
                        @include('in_shopping_carts.form', ["product" => $product])
                    </div>                                
                </div>                
            </div>
        </div>            
    </div>    
</div>