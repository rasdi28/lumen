<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
$router->get('/product','ProductController@index');
$router->get('/product/{id}','ProductController@show');
$router->post('/product','ProductController@create');






$router->get('/blog','BlogController@index');
$router->post('/blog','BlogController@create');
$router->get('/blog/{id}','BlogController@show');


