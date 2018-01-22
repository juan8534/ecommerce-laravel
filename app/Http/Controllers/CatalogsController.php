<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Image;

class CatalogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->get('title'));
        $categories = Category::all();
        $products = Product::search($request->title)->orderBy('id', 'DESC')->paginate(6);
        $products->each(function($products){
            $products->category;
            $products->images;
        });
        /* dd($categories); */
        return view('catalogs.index')->with('categories',$categories)
        ->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the products with the categorys.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);
        $products->category;
        $categories = Category::orderBy('name','DESC')->pluck('name','id'); //Esto es una lista y no un objeto
        return view('catalogs.show')->with('products',$products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function searchCategory($name)
    {
        $category = Category::searchCategory($name)->first();
        $categories = Category::all();
        $products = $category->products()->paginate(6);
        $products->each(function($products){
            $products->category;
            $products->images;
        });
        return view('catalogs.index')
        ->with('products',$products)
        ->with('categories',$categories);
    }

}
