<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->get('users', 'UsersController@index');
    $router->get('products', 'ProductsController@index');
    $router->post('products', 'ProductsController@store');
    $router->get('products/create', 'ProductsController@create');
    $router->get('products/{id}', 'ProductsController@show');
    $router->delete('products/{id}', 'ProductsController@destroy');
    $router->put('products/{id}', 'ProductsController@update');
    $router->get('products/{id}/edit', 'ProductsController@edit');
    $router->get('orders', 'OrdersController@index')->name('admin.orders.index');

});
