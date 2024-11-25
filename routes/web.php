<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\PeliculaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('personajes', PersonajeController::class);
Route::resource('peliculas', PeliculaController::class);