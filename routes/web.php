<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@home'); //Ruta generada para la vista principal

Route::get('/carrito', 'ShoppingCartsController@index');
Route::post('/carrito', 'ShoppingCartsController@checkout');

/* Route::get('/catalogs','CatalogsController@index'); */


/*Ruta para filtrar por categorias */




Route::resource('catalogs','CatalogsController');

Route::get('producto/{name}',[
      'uses' => 'CatalogsController@searchCategory',
      'as'   => 'search.category'
]);

/* Route::get('catalogs/{id}',[
      'uses' => 'CatalogsController@show',
      'as'   => 'view.product'
]); */

Auth::routes();

/* Route::get('products/{id}', 'ProductsController@show');  */

/* Route::get('products/{id}', 'ProductsController@show'); */
Route::get('compras', 'ShoppingCartsController@orders');
Route::resource('compras', 'ShoppingCartsController',[
      'only' => ['show'] //Ruta para mostar el link con la informacion del cliente
]);
Route::resource('in_shopping_carts','InShoppingCartsController', [
      'only' => ['store', 'destroy'] //Ruta resource solo para metodos de actualizacion y de eliminacion
]);
Route::get('/payments/store', 'PaymentsController@store');


/*Rutas con el middlweware admin*/ 
Route::group(['middleware' => 'admin'],function(){
      

Route::resource('products','ProductsController');// Ruta para el controlador de productos
Route::delete('products/{id}/destroy',[
      'uses' => 'ProductsController@destroy',
      'as'   => 'products.destroy'
]);


Route::resource('users','UsersController');
Route::delete('users/{id}/destroy',[
      'uses' => 'UsersController@destroy',
      'as'   => 'users.destroy'
]);


Route::resource('categories', 'CategoriesController');
Route::delete('categories/{id}/destroy',[
      'uses' => 'CategoriesController@destroy',
      'as'   => 'categories.destroy'
]);

Route::resource('orders', 'OrdersController');

Route::post('orders/update/{id}', ['as' => 'orders/update', 'uses' => 'OrdersController@update']);

});      
Route::get('/home', 'HomeController@index');

