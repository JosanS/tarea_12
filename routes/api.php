<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\PeliculaController;

Route::apiResource('personajes', PersonajeController::class);
Route::apiResource('peliculas', PeliculaController::class);