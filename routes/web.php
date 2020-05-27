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
Route::get('/', 'HomeController@index')->name('home');

// Categories Overview
Route::get('/category', 'CategoryController@index')->name('category');

// Product Overview
Route::get('/product/{id}', 'ProductController@index')->name('product');
Route::get('/product/add/{id}', [
    'uses' => 'ProductController@add',
    'as' => 'product.add'
]);


// Product Details
Route::get('/productView/{id}', 'ProductViewController@index')->name('productView');
