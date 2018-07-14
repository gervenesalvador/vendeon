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

Route::get('/', 'HomeController@index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');
Route::post('/admin', 'AdminController@login')->name('admin_login');

Route::get('/products/{sef_url}', 'ProductController@view');

Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart/add', 'CartController@store')->name('add_to_cart');
Route::post('/cart/update', 'CartController@update')->name('update_cart');

Route::get('/checkout', 'CartController@checkout')->name('checkout');

Route::get('test', 'HomeController@test');

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/home', 'AdminController@home');
    Route::get('/products', 'ProductController@index');
    Route::get('/products/create', 'ProductController@create');
    Route::get('/products/{product}', 'ProductController@view');
    Route::post('/product', 'ProductController@store')->name('store_product');
});

