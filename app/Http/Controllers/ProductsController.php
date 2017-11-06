<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
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
        $products = Product::all();
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
      return view("products.create",['product' => $product]); //Pasamos la variable a la vista create product
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Verificamos si se sube el archivo valido
        $hasFile = $request->hasFile('cover') && $request->cover->isValid();
        //Metodo creado para guardar el producto
        $product = new Product;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->pricing = $request->pricing;
        $product->user_id = Auth::user()->id; //Se le asigna el producto al usuario que tiene sesion abierta

        if ($hasFile) {
            $extension = $request->cover->extension();
            $product->extension = $extension;
        }

        if($product->save()){
          if ($hasFile) {
            $request->cover->storeAs('images', "$product->id.$extension");
          }
          Alert::success('Producto creado correctamente!!!');          
          return redirect("/products");
        }else {
          return redirect("/products/create");
        }
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
