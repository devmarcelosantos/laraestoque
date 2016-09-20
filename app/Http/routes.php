<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

//Route::get('auth/logout', 'Auth\AuthController@logout');

// Route for Main Panel
Route::get('/', 'PanelController@index');
Route::get('/home', 'PanelController@index');

// Routes for Products
Route::get('/product', ['uses' => 'ProductController@get_list_product', 'as' => 'product.listPage']);
Route::post('/product', ['uses' => 'ProductController@post_list_product', 'as' => 'product.list']);

Route::get('/products', ['uses' => 'ProductController@list_products', 'as' => 'products.list']);

Route::get('/products/add', 'ProductController@get_add_product');
Route::post('/products/add', 'ProductController@post_add_product');
Route::get('/product/edit/{id}', ['uses' => 'ProductController@get_edit_product', 'as' => 'product.editPage']);
Route::post('/product/edit/{id}', ['uses' => 'ProductController@post_edit_product', 'as' => 'product.edit']);
Route::get('/product/delete/{id}', ['uses' => 'ProductController@delete_product', 'as' => 'product.delete']);

//Routes for Stock
Route::get('/stock', ['uses' => 'StockController@list_stocks', 'as' => 'stocks.list']);