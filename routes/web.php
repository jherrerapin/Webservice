<?php
use Illuminate\Http\Response;
use Illuminate\Http\Request;

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
    $results = app('db')->select("SELECT * FROM peliculas");
    return response()->json($results);
    
});

$router->get('/pelicula', function () use ($router) {
    return "Prueba";
});

$router->post('/pelicula', function (Request $request) use ($router) {
    return "insert".$request->get("nombre")."AAAA";
    //return response()->json($request->all());
});

