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

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/home', 'AdminController@home');
    Route::get('/products', 'ProductController@index');
    Route::get('/product/{product}', 'ProductController@view');
    Route::get('/product/create', 'ProductController@create');
    Route::post('/product', 'ProductController@store')->name('store_product');
});

