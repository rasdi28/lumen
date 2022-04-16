<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Models\Product;

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
$router->get('/',function(){
    return "hello";
});

$router->group(['prefix'=>'test'], function() use ($router){
    $router->get('/','TestController@index');
    $router->post('/','TestController@create');
    $router->get('/{id}','TestController@show');
    $router->put('/{id}','TestController@update');
    $router->delete('/{id}','TestController@destroy');
});

$router->group(['prefix'=>'product'],function() use ($router){
    $router->get('/','ProductController@index');
    $router->get('/{id}','ProductController@show');
    $router->post('/','ProductController@create');
 
});


$router->group(['prefix'=>'blog'], function() use ($router){
    $router->get('/','BlogController@index');
    $router->post('/','BlogController@create');
    $router->get('/{id}','BlogController@show');
    $router->put('/{id}','BlogController@update');
    $router->delete('/{id}','BlogController@destroy');
    
});

$router->post('/register','UserController@register');
$router->post('/login','UserController@login');

