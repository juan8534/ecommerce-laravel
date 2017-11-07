<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\Product;
use App\ShoppingCart;


class OrdersController extends Controller
{

    
    public function __construct(){
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->get();
        /* $ordenes = Order::with('shopping_cart','products')->get();
        dd($ordenes); */
        $totalMonth = Order::totalMonth();
        $totalMonthCount = Order::totalMonthCount();
        $totalSales = Order::totalSales();

        return view('orders.index', ['orders' => $orders, 'totalMonth' => $totalMonth,
        'totalMonthCount' => $totalMonthCount, 'totalSales' => $totalSales]);

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
        $order = Order::find($id);

        $field = $request->name;

        $order->$field = $request->value;
        $order->save();

        return $order->$field;
    }

}
