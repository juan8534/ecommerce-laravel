<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ShoppingCart;
use App\Paypal;
use App\Order;
use Alert;

class ShoppingCartsController extends Controller
{
    public function __construct(){
        $this->middleware("shoppingcart");
    }

    public function index(Request $request)
    {           
        $shopping_cart = $request->shopping_cart;
      
   
        $products = $shopping_cart->products()->get();  //Extraemos los productos del carrito con el metodo get

        $total = $shopping_cart->total(); // Llamamos el metodo total del modelo ShoppingCart

        return view('shopping_carts.index', ['products' => $products, 'total' => $total ]); 
    }

    public function show($id)
    {
        $shopping_cart = ShoppingCart::where('customid', $id)->first(); //Forma de buscar un carrito sin una llave foranea

        $order = $shopping_cart->order();

        return view('shopping_carts.completed', ['shopping_cart'=> $shopping_cart, 'order' => $order]);
    }

    /*Funcion  que ejecuta el metod para dirigirce a paypal*/
    public function checkout(Request $request){
        $shopping_cart = $request->shopping_cart;
        $products = $shopping_cart->products()->get(); 
        $total = $shopping_cart->total();
        
        if($total == 0){
            Alert::warning('El carrito de compras esta vacio');
            return view('shopping_carts.index', ['products' => $products, 'total' => $total ]); 
        }
        $paypal = new Paypal($shopping_cart);

         $payment = $paypal->generate();

         return redirect($payment->getApprovalLink());

    }
}
