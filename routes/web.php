<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Home Page
Route::get('/home', 'HomeController@index')->name("home");

Route::group(['middleware' => 'auth'], function () {
    Route::get('/category', 'CategoryController@index')->name('category');

    // Product Overview
    Route::get('/product/{id}', 'ProductController@index')->name('product');
    Route::post('/product/add/{id}', [
        'uses' => 'ProductController@add',
        'as' => 'product.add'
    ]);


    // Product Details
    Route::get('/productView/{id}', 'ProductViewController@index')->name('productView');

    // Shopping Cart Overview
    Route::get('/shoppingCart', 'ShoppingCartController@index')->name('shoppingCart');
    Route::get('/shoppingCart/remove/{id}', [
        'uses' => 'ShoppingCartController@remove',
        'as' => 'shoppingCart.remove'
    ]);
    Route::get('/shoppingCart/order', [
        'uses' => 'ShoppingCartController@order',
        'as' => 'shoppingCart.order'
    ]);
    Route::post('/shoppingCart/update/{id}', [
        'uses' => 'ShoppingCartController@update',
        'as' => 'shoppingCart.update'
    ]);

    // Order Overview
    Route::get('/order', 'OrderController@index')->name('order');
    Route::get('/orderView/{id}', 'OrderViewController@index')->name('orderView');
});
