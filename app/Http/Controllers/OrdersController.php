<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\Product;
use App\ShoppingCart;
use App\State;
use Alert;


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
        $orders = Order::orderBy('id', 'ASC')->paginate(10);     ;
        $orders->each(function($orders){
            $orders->states;
            $orders->shopping_cart;
        });
        $totalMonth = Order::totalMonth();
        $totalMonthCount = Order::totalMonthCount();
        $totalSales = Order::totalSales();

        return view('orders.index', ['orders' => $orders, 'totalMonth' => $totalMonth,
        'totalMonthCount' => $totalMonthCount, 'totalSales' => $totalSales]);

    }

    public function edit($id)
    {
        $order = Order::find($id);
        $order->states;
        $state = State::orderBy('description','DESC')->pluck('description','id');
        
        return view('orders.edit')
        ->with('order', $order)
        ->with('state', $state);
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
        $order->fill($request->all());
        $order->save();
        Alert::success('Orden editada correctamente!!!');
        return redirect()->route('orders.index');
    }

}
