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
    $sql = "INSERT INTO peliculas (nombre, duracion, categoria, fecha_estreno, poster_estreno) 
    VALUES ('".$request->get("nombre")."','".$request->get("duracion")."','".$request->get("categoria")."','".$request->get("fecha_estreno")."','".$request->get("poster_estreno")."')";
    $results = app('db')->insert($sql);
    $results = app('db')->select("SELECT id, nombre, duracion, categoria, fecha_estreno 
    FROM peliculas ORDER BY 1 DESC LIMIT 1");
    return response()->json($results);
});

$router->put('/pelicula/{id}', function (Request $request, $id) {
    $sql = "UPDATE peliculas SET nombre='{$request->get('nombre')}', duracion={$request->get('duracion')}, categoria='{$request->get('categoria')}', fecha_estreno='{$request->get('fecha_estreno')}', poster_estreno='{$request->get('poster_estreno')}' WHERE id={$id}";
    $results = app('db')->update($sql);
    $results = app('db')->select("SELECT id, nombre, duracion, categoria, fecha_estreno 
    FROM peliculas WHERE id=" . $id . " limit 1");
    return response()->json($results);
});

$router->delete('/pelicula/{id}', function ($id) use ($router) {
    $sql = "DELETE FROM peliculas WHERE id='{$id}'";
    $results = app ('db')->delete($sql);
    return response()->json(["deleted" => true ]);
});