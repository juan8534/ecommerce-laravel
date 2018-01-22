<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function scopeSearchCategory($query, $name)
    {
        return $query->where('name', '=', $name);
    }
}
