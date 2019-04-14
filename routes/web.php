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
Auth::routes(['verify'=>true]);

Route::group(['middleware' => ['auth', 'verified' , 'address']], function() {
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');

});
Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');

