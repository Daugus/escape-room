<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HangmanController;
use App\Http\Controllers\KukuController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Ruta para coger el JSON de Hangman desde Vue
Route::post('hangman/getWord', [HangmanController::class, 'getWord']);

// Ruta para coger el JSON de Kuku desde Vue
Route::post('kuku/getCards', [KukuController::class, 'getCards']);
