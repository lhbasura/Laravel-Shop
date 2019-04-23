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

Route::get('/','PagesController@root')->name('root');
Route::get('/', 'PagesController@root')->name('root')->middleware('verified');
Route::redirect('/', '/products')->name('root');
Auth::routes(['verify'=>true]);

Route::group(['middleware' => ['auth', 'verified' ]], function() {
    Route::group(['middleware' => 'address'], function () {
        Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
        Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
        Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
        Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
        Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
        Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
    });

    Route::get('cart', 'CartController@index')->name('cart.index');
    Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
    Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');

    Route::post('cart', 'CartController@add')->name('cart.add');
    Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');

    Route::post('orders', 'OrdersController@store')->name('orders.store');
});


Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');
Route::get('products/{product}', 'ProductsController@show')->name('products.show');

