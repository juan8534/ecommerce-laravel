<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ShoppingCart;
use App\Paypal;
use App\Order;

class PaymentsController extends Controller
{
    public function __construct(){
      $this->middleware("shoppingcart");
    }
    public function store(Request $request)
    {
      $shopping_cart = $request->shopping_cart;
      // Obtenemos un objeto del carrito de compras
      #$shopping_cart_id = \Session::get('shopping_cart_id');
      #$shopping_cart =  ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

      $paypal = new Paypal($shopping_cart);
      $response = $paypal->execute($request->paymentId, $request->PayerID);
      if ($response->state == "approved") {
         \Session::remove('shopping_cart_id'); //Si aprueba la compra elimina del contador del carrito de compras
        $order = Order::createFromPayPalResponse($response, $shopping_cart);
        $shopping_cart->approve();        
      }

      
      return view('shopping_carts.completed', ['shopping_cart'=> $shopping_cart, 'order' => $order]);
      //dd($order);
    }
}
