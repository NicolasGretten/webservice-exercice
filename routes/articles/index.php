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
$router->group(['prefix' => 'blog/articles'], function () use ($router) {
    $router->get('/{article_id}', [
        'uses' => 'ArticleController@retrieve'
    ]);
    $router->get('/', [
        'uses' => 'ArticleController@list'
    ]);
});
