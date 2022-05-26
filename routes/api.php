<?php

$router->group(['prefix' => 'app'], function () use ($router) {
  $router->get('/',  ['uses' => 'AppController@showAll']);

  $router->get('/{id}', ['uses' => 'AppController@showOne']);

  $router->post('/', ['uses' => 'AppController@create']);

  $router->delete('/{id}', ['uses' => 'AppController@delete']);

  $router->put('/{id}', ['uses' => 'AppController@update']);
});