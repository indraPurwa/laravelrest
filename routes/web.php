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
$router->get('foo', function () {
    return 'Hello World';
});

$router->get('user', 'UserController@index');
$router->get('user/tampil', 'UserController@getIndexViews');

$router->get("posts", "PostController@index");

$router->get('todo', 'TodoController@paginate');
$router->get('todo/all', 'TodoController@all');
$router->get('/todo/{id}', 'todoController@show');
$router->post('/todo', 'todoController@store');