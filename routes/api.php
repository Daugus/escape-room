<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HangmanSolutionController;
use App\Http\Controllers\OvejaController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Ruta para coger el JSON de Hangman desde VUE
// Route::post('hangman/getWord', 'HangmanSolutionController@getWord')->name('api.hangman.getWord');
Route::post('hangman/getWord', [HangmanSolutionController::class, 'getWord']);


Route::post('oveja/getIncubationMethods', [OvejaController::class, 'getIncubationMethods']);
