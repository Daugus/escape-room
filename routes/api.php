<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GameController;
use App\Http\Controllers\SalaEsperaController;

// Ruta para coger el JSON de Hangman desde Vue
Route::post('hangman/getWord', [GameController::class, 'getWord']);

// Ruta para coger el JSON de Kuku desde Vue
Route::post('kuku/getCards', [GameController::class, 'getCards']);

// Ruta para coger el JSON de Agrupando desde Vue
Route::post('agrupando/getConcepts', [GameController::class, 'getConcepts']);

// Ruta para coger el JSON de Todo Bien Equilibrado desde Vue
Route::post('equilibrado/getFormulas', [GameController::class, 'getFormulas']);

// Ruta para coger el JSON de Cada Oveja con su Pareja desde Vue
Route::post('oveja/getIncubationMethods', [GameController::class, 'getIncubationMethods']);

// Ruta para coger el JSON de Password desde Vue
Route::post('password/getScientists', [GameController::class, 'getScientists']);

// Ruta para coger el JSON de datos de usuario para la sala de espera desde Vue
Route::post('sala-espera/getUser', [SalaEsperaController::class, 'getUser']);

// Ruta para crear una partida desde Vue
Route::post('sala-espera/crearPartida', [SalaEsperaController::class, 'store']);
