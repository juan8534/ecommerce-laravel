{!! Form::open(['url' => '/in_shopping_carts', 'method' => 'POST', "class" => "add-to-cart inline-block"]) !!}
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <button class="btn waves-effect waves-light" type="submit" name="action">
        <i class="material-icons">add_shopping_cart</i>
    </button>
{!! Form::close([]) !!}
