@extends('layouts.app')

@section('content')
 <!--BreadCrumbs-->
 <section id="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="breadcrumb">
                    <a href="{{url('/products') }}" class="breadcrumb-item">Productos</a>
                    <span class="breadcrumb-item active">Todos los productos</span>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--BreadCrumbs/-->

<div class="container">
    <h4 id="table-product">Listado de productos</h4>
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>precio</th>
                <th>Categoria</th>
				<th>Valor descuento</th>
                <th>Inicio descuento</th>
                <th>Fin descuento</th>
                <th>Imagen</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->title}}</td>
                <td>{{ $product->description}}</td>
                <td>{{ $product->pricing }}</td>
                <td>{{ $product->category->name }}</td>
				<td>{{ $product->discount_value	 }}</td>
                @if($product->discount_start_date != null)
                <td>{{ $product->discount_start_date }}</td>
                @else
                <td>No aplica</td>
                @endif
                @if($product->discount_end_date != null)
                <td>{{ $product->discount_end_date }}</td>
                @else
                <td>No aplica</td>
                @endif
                <td>
                    @foreach ($product->images as $image)
                        <img src="{{ asset('images/products_images/'.$image->name )}}" height="70px" width="140px">        
                    @endforeach
                </td>
                <td>{{ $product->user->name}}</td>
                <td>
                    <a id="btn-product" href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                </td>
                <td>
                {!! Form::open(['route' => ['products.destroy',$product->id], 'method' => 'delete','class'=>'delete_product']) !!}
                <button class="btn btn-danger delete-product">
                    Eliminar
                </button>
                {!! Form::close() !!}  
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!--Paginador-->
    <div class="text-center">
        {{ $products->render() }}
    </div>
    <!--Paginador-->
    <a id="crarProducto" href="{{ route('products.create')}}" class="btn btn-compumundo">Crear Producto</a>
   
</div>
@endsection


