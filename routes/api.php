<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UserController;




Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'authenticate']);


Route::group(['middleware' => ['jwt.verify']], function() {
    Route::resource('/peliculas', PeliculaController::class);
    Route::post('/me',[UserController::class, 'getAuthenticatedUser']);
});