<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HangmanController;
use App\Http\Controllers\KukuController;
use App\Http\Controllers\GroupingController;
use App\Http\Controllers\EquilibradoController;
use App\Http\Controllers\OvejaController;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Ruta para coger el JSON de Hangman desde Vue
Route::post('hangman/getWord', [HangmanController::class, 'getWord']);

// Ruta para coger el JSON de Kuku desde Vue
Route::post('kuku/getCards', [KukuController::class, 'getCards']);

// Ruta para coger el JSON de Agrupando desde Vue
Route::post('agrupando/getConcepts', [GroupingController::class, 'getConcepts']);

// Ruta para coger el JSON de Todo Bien Equilibrado desde Vue
Route::post('equilibrado/getFormulas', [EquilibradoController::class, 'getFormulas']);


Route::post('oveja/getIncubationMethods', [OvejaController::class, 'getIncubationMethods']);

Route::post('password/getScientist', [PasswordController::class, 'getScientist']);
