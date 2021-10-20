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

$router->get('/pelicula/{id}', function ($id) use ($router) {
    $results = app('db')->select("SELECT id, nombre, duracion, categoria, fecha_estreno 
    FROM peliculas WHERE id=" . $id . " limit 1");
    echo "Los datos de la pelicula de id: " . $id . "  son: ";
    return response()->json($results);
    
});

$router->get('/peliculas/', function () use ($router) {
    $results = app('db')->select("SELECT * FROM peliculas");
    echo "Lista de peliculas disponibles";
    return response()->json($results);
   
});



$router->post('/pelicula', function (Request $request) use ($router) {
    return "insert".$request->get("nombre")."AAAA";
    //return response()->json($request->all());
});

