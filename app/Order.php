<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCreated;
use Auth;

class Order extends Model
{
    protected $fillable = ['recipient_name', 'line1', 'line2', 'city', 'country_code', 'state', 'postal_code',
                            'email', 'shopping_cart_id', 'status', 'total', 'user_id','guide_number','estate_id'];
    
    public function sendMail(){
        if(Auth::check()){
            Mail::to(Auth::user()->email)->send(new OrderCreated($this));
        }else{
            Mail::to('email')->send(new OrderCreated($this));
        }
        
    }                

    public function shoppingCartID(){
        return $this->shopping_cart->customid;
    }

    public static function createFromPayPalResponse($response, $shopping_cart)
    {
      $payer = $response->payer;
      $user = Auth::user()->id;

      $orderData = (array) $payer->payer_info->shipping_address;
      $orderData = $orderData[key($orderData)];

      $orderData["email"] = $payer->payer_info->email;
      $orderData["total"] = $shopping_cart->total();
      $orderData["user_id"] = $user;
      $orderData["shopping_cart_id"] = $shopping_cart->id;

      return Order::create($orderData);
    }

    public function scopeOrderID($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function scopeMonthly($query)
    {
        return $query->whereMonth('created_at', '=', date('m')); //date 'm' me devuelve el mes actual en PHP
    }

    public function scopeLatest($query)
    {
        return $query->orderID()->monthly();
    }

    public function address(){
        return "$this->line1 $this->line2";
    }

    public function shopping_cart(){
        return $this->belongsTo('App\ShoppingCart');
    }

    public function states()
    {
        return $this->belongsTo('App\State','estate_id');
    }

    public static function  totalMonth(){
        return Order::monthly()->sum("total");
    }

    public static function  totalMonthCount(){
        return Order::monthly()->count("total");
    }

    public static function totalSales(){
        return Order::sum('total');
    }

}
