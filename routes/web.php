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

$router->get('/', function () use ($router) {
    return 'Hello Softonic Test';
});

$router->group(['prefix' => 'app'], function () use ($router) {
  $router->get('/',  ['uses' => 'AppController@showAll']);

  $router->get('/{id}', ['uses' => 'AppController@showOne']);

  $router->post('/', ['uses' => 'AppController@create']);

  $router->delete('/{id}', ['uses' => 'AppController@delete']);

  $router->put('/{id}', ['uses' => 'AppController@update']);
});