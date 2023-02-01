<?php

use Illuminate\Support\Facades\Route;

// usuario
use App\Http\Controllers\UserController;

// juego
use App\Http\Controllers\GameController;

// menú
use App\Http\Controllers\SobreNosotrosController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PruebasController;

use App\Http\Controllers\HangmanSolutionController;
use App\Http\Controllers\KukuSolutionController;
use App\Http\Controllers\GroupingSolutionController;
use App\Http\Controllers\OvejaSolutionController;

/*
    si no hay ninguno especificado, cualquier usuario puede entrar
    lista (especificados en Kernel.php):
    - invitado: comprueba que la sesión NO esté iniciada
    - logged: comprueba que la sesión esté iniciada
    - profesor: comprueba que la sesión esté iniciada y el usuario sea profesor
*/

// usuario
Route::get('/login', [UserController::class, 'login'])
    ->name('user.login')
    ->middleware('invitado');

Route::post('/login', [UserController::class, 'validateLogin'])
    ->name('user.validate')
    ->middleware('invitado');

Route::get('/signup', [UserController::class, 'create'])
    ->name('user.create')
    ->middleware('invitado');

Route::post('/signup', [UserController::class, 'store'])
    ->name('user.store')
    ->middleware('invitado');

Route::get('/logout', [UserController::class, 'logout'])
    ->name('user.logout')
    ->middleware('logged');


Route::get('/perfil', [UserController::class, 'show'])
    ->name('user.show')
    ->middleware('logged');

Route::get('/perfil/editar', [UserController::class, 'edit'])
    ->name('user.edit')
    ->middleware('logged');

Route::put('/perfil/editar', [UserController::class, 'update'])
    ->name('user.update')
    ->middleware('logged');

Route::delete('/perfil/eliminar', [UserController::class, 'destroy'])
    ->name('user.destroy')
    ->middleware('logged');

// juego
Route::get('/jugar/lab', [GameController::class, 'lab'])
    ->name('laboratorio.index')
    ->middleware('logged');


Route::get('/jugar/hangman', [GameController::class, 'hangman'])
    ->name('prueba.hangman')
    ->middleware('logged');

Route::get('/jugar/kuku', [GameController::class, 'kuku'])
    ->name('prueba.kuku')
    ->middleware('logged');

Route::get('/jugar/agrupando', [GameController::class, 'agrupando'])
    ->name('prueba.agrupando')
    ->middleware('logged');

Route::get('/jugar/equilibrado', [GameController::class, 'equilibrado'])
    ->name('prueba.equilibrado')
    ->middleware('logged');

Route::get('/jugar/oveja', [GameController::class, 'oveja'])
    ->name('prueba.oveja')
    ->middleware('logged');

Route::get('/jugar/password', [GameController::class, 'password'])
    ->name('prueba.password')
    ->middleware('logged');

// menús
Route::get('/sobre-nosotros', [SobreNosotrosController::class, 'index'])
    ->name('sobre-nosotros.index');

Route::get('/ranking', [GroupController::class, 'index'])
    ->name('ranking.index')
    ->middleware('logged');
Route::post('/ranking', [GroupController::class, 'filter'])
    ->name('ranking.filter')
    ->middleware('logged');

Route::get('/administrar', [PruebasController::class, 'index'])
    ->name('pruebas.index')
    ->middleware('profesor');

Route::resource('/administrar/hangman', HangmanSolutionController::class)->middleware('profesor');
Route::resource('/administrar/kuku', KukuSolutionController::class)->middleware('profesor');
Route::resource('/administrar/agrupando', GroupingSolutionController::class)->middleware('profesor');
Route::resource('/administrar/oveja', OvejaSolutionController::class)->middleware('profesor');

Route::get('/', function () {
    return view('index');
})->name('index');
