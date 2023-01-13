<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HangmanController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Ruta para coger el JSON de Hangman desde VUE
Route::post('hangman/getWord', [HangmanController::class, 'getWord']);
