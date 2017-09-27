<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    // Atributo que podemos modificar de la base de datos de la tabla shopping_carts
    protected $fillable = ["status"];

    public function generateCustomID() //metodo para ocultar el id del carrito en la barra de navegación
    {
        return md5("$this->id $this->update_at");
    }

    public function updateCustomIDAndStatus()
    {
        $this->status = "approved";
        $this->customid = $this->generateCustomID();
        $this->save();
    }

    public function approve()
    {
        $this->updateCustomIDAndStatus();
    }

    // Metodo para llamar los productos en el carrito de compras
    public function in_shopping_carts()
    {
      return $this->hasMany('App\InShoppingCart');
    }

    //Metodo para obtener todos los productos y poderlos añadir al carrito
    public function products()
    {
      return $this->belongsToMany('App\Product', 'in_shopping_carts');
    }

    public function order()
    {
      return $this->hasOne('App\Order')->first(); 
    }


    public function productsSize() //Cuenta y muestra los productos que se tiene en el carrito de compras
    {
        return $this->products()->count();
    }

    //Suma todos los productos añadidos por medio de la base de datos
    public function total()
    {
        return $this->products()->sum('pricing');
    }

    public function totalUSD()
    {
        return $this->products()->sum('pricing') / 100;
    }

    // Metodo para buscar un carrito o crearlo
    public static function findOrCreateBySessionID($shopping_cart_id)
    {
        if($shopping_cart_id){ //Si existe el carrito de compras lo busca por su id
            return ShoppingCart::findBySession($shopping_cart_id);
        }
        else{ //Crea el carito de compras si no lo encuentra
            return ShoppingCart::createWithoutSession();
        }
    }

    public static function findBySession($shopping_cart_id )
    {
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSession()
    {

      return ShoppingCart::create([ //Arreglo para crear el carrito si no existe
        "status" => "incompleted"
      ]);
      /*
      //Otra forma de crer el carrito si no existe
      $shopping_cart = new ShopppingCart;

      $shopping_cart->status = "incompleted";

      $shopping_cart->save();

      return $shopping_cart;*/
    }
}
