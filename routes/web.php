<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('product', 'ProductController@products');
$router->get('category', 'ProductController@categories');
$router->get('category/{id}', 'ProductController@getProductsByCategory');

$router->post('login', 'UserController@login');

$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->get('cart', 'UserController@myCart');
    $router->post('cart', 'UserController@addToCart');
});

$router->get('user/{id}/cart', 'UserController@getCartItems');