<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GameController;

// Ruta para coger el JSON de Hangman desde Vue
Route::post('hangman/getWord', [GameController::class, 'getWord']);

// Ruta para coger el JSON de Kuku desde Vue
Route::post('kuku/getCards', [GameController::class, 'getCards']);

// Ruta para coger el JSON de Agrupando desde Vue
Route::post('agrupando/getConcepts', [GameController::class, 'getConcepts']);

// Ruta para coger el JSON de Cada Oveja con su Pareja desde Vue
Route::post('oveja/getIncubationMethods', [GameController::class, 'getIncubationMethods']);
