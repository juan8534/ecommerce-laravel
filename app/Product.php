<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $table = "products";

    protected $fillable = ['title','description','pricing','category_id'];

    public function scopeLatest($query){
        return $query->orderBy('id','desc');
    }

    public function paypalItem()
    {
      return \PaypalPayment::item()->setName($this->title)
                                   ->setDescription($this->description)
                                   ->setCurrency('USD')
                                   ->setQuantity(1)
                                   ->setPrice($this->pricing);
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function scopeSearch($query, $title)
    {
      
      return $query->where('title', 'LIKE', "%$title%");
    }
}
