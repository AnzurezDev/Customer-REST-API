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

$router->group([
    'middleware' => [
        'success',
        'log_response',
        'log_request',
        'auth',
    ],
    'prefix' => 'api/customers'
], function () use ($router) {
    $router->post('/', [
        'middleware' => [
            'validate_data_customer',
            'validate_commune_region',
        ],
        'uses' => 'CustomerController@store'
    ]);

    $router->get( '/{search}', 'CustomerController@get' );

    $router->get( '/', 'CustomerController@index' );

    $router->delete('/{dni}', [
        'middleware' => 'validate_customer',
        'uses' => 'CustomerController@delete'
    ]);
});

$router->group([
    'middleware' => [
        'success',
        'log_response',
        'log_request',
    ],
    'prefix' => 'users'
], function () use ($router) {
    $router->post( '/', 'UserController@store' );
});

$router->post('/login', [
    'middleware' => [
        'success',
        'log_response',
        'log_request',
    ],
    'uses' => 'UserController@login'
]);