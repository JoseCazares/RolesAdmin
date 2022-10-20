<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use FastRoute\Route;

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


$router->get('/', function() use ($router){
    return $router->app->version();
});

//Lista todos los roles existentes
$router->get('/roles', 'RolesController@index');

//Crea un nuevo rol
$router->post('/roles', 'RolesController@store');

//Muestra la informacion de un rol en especifico
$router->get('/roles/{id}', 'RolesController@show');

//Actualiza la informacion del rol
$router->put('/roles/{id}', 'RolesController@update');
$router->patch('/roles/{id}', 'RolesController@update');

/**
 * Elimina la informacion del rol
 * Junto con ello se elimina de la tabla permisos_de_rol.
 * Es decir elimina el rol y sus permisos asignados
 */
 $router->delete('/roles/{id}', 'RolesController@destroy');


 /**Routas para los permisos */
//Lista todos los roles existentes
$router->get('/permisos', 'PermisosController@index');

//Crea un nuevo rol
$router->post('/permisos', 'PermisosController@store');

//Muestra la informacion de un rol en especifico
$router->get('/permisos/{id}', 'PermisosController@show');

//Actualiza la informacion del rol
$router->put('/permisos/{id}', 'PermisosController@update');
$router->patch('/permisos/{id}', 'PermisosController@update');

$router->delete('/permisos/{id}', 'PermisosController@destroy');
