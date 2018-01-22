<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Image;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::orderBy('id', 'DESC')->limit(3);
        $products->each(function($products){
            $products->category;
            $products->images;
        });
        /* dd($categories); */
        return view('catalogs.index')->with('categories',$categories)
        ->with('products',$products);
    }
}
