<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Image;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Alert;

class ProductsController extends Controller
{
    /*Creamos el middleware para que solo los usuarios logueados puedan
      Crear, Editar, Eliminar los productos. Si no esta logueado puede verlos*/   
    public function __construct(){
      $this->middleware("auth", ["except" => "show"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Se crea una variable products para tener los datos del modelo Product con el metodo all()
        $products = Product::orderBy('id', 'ASC')->paginate(10);
        $products->each(function($products){
          $products->image;
        });
        return view("products.index",['products' => $products ]); //Se lleva la variable 'products' al modelo
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $product = new Product;
      $category = Category::orderby('name','ASC')->pluck('name','id');
      
      return view('products.create')
      ->with('product', $product)
      ->with('category', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
      $file = $request->file('image');
        
      $name = 'product_' . time() . '.' .$file->getClientOriginalExtension();
      $path = public_path() . '/images/products_images';
      $file->move($path, $name);
      
      //metod para tomar el user_id de la tabla usuarios
      $product = new Product($request->all());
      $product->user_id = \Auth::user()->id;
      $product->save();
      //dd($product);
      //metodo para llenar la tabla imagenes
      $image = new Image();
      $image->name = $name;
      $image->product()->associate($product);
      $image->save();
      Alert::success('Producto Creado correctamente!!!');          
      return redirect("/products");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id); //Se selecciona el producto desde la base de datos
        return view('products.show',['product' => $product]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::find($id); //Buscamos el producto para editarlo      
      return view("products.edit",['product' => $product]); //Lo pasamos a la vista
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $product = Product::find($id);

      $product->title = $request->title;
      $product->description = $request->description;
      $product->pricing = $request->pricing;

      if($product->save()){
        Alert::success('Producto editado correctamente!!!');          
        return redirect("/products");
      }else {
        return view("products.edit",['product' => $product]); //Lo pasamos a la vista
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      try{
        $product = Product::find($id); //Se encuentra el producto que se desea eliminar
        $product->delete();
        Alert::success('Producto eliminado correctamente!!!');          
        return redirect('/products');
      } catch(QueryException $ex){
        //dd($ex->getMessage());
        Alert::warning('El producto no se puede eliminar');   
        return redirect('/products');       
      }        
    }
}
