<?php

use Illuminate\Support\Facades\Route;

// usuario
use App\Http\Controllers\UserController;

// juego
use App\Http\Controllers\GameController;

// menú
use App\Http\Controllers\SobreNosotrosController;
use App\Http\Controllers\PruebasController;

/*
    si no hay ninguno especificado, cualquier usuario puede entrar
    lista (especificados en Kernel.php):
    - invitado: comprueba que la sesión NO esté iniciada
    - logged: comprueba que la sesión esté iniciada
    - profesor: comprueba que la sesión esté iniciada y el usuario sea profesor
*/

// usuario
Route::get('/login', [UserController::class, 'login'])->name('user.login')->middleware('invitado');
Route::post('/login', [UserController::class, 'validateLogin'])->name('user.validate')->middleware('invitado');
Route::get('/signup', [UserController::class, 'create'])->name('user.create')->middleware('invitado');
Route::post('/signup', [UserController::class, 'store'])->name('user.store')->middleware('invitado');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout')->middleware('logged');

Route::get('/perfil', [UserController::class, 'show'])->name('user.show')->middleware('logged');
Route::get('/perfil/editar', [UserController::class, 'edit'])->name('user.edit')->middleware('logged');
Route::post('/perfil/editar', [UserController::class, 'update'])->name('user.update')->middleware('logged');
Route::delete('/perfil/eliminar', [UserController::class, 'destroy'])->name('user.destroy')->middleware('logged');

// juego
Route::get('/jugar/lab', [GameController::class, 'lab'])->name('laboratorio.index');

Route::get('/jugar/hangman', [GameController::class, 'hangman'])->name('hangman.index');
Route::get('/jugar/kuku', [GameController::class, 'kuku'])->name('kuku.index');
Route::get('/jugar/agrupando', [GameController::class, 'agrupando'])->name('agrupando.index');
Route::get('/jugar/equilibrado', [GameController::class, 'equilibrado'])->name('equilibrado.index');
Route::get('/jugar/oveja', [GameController::class, 'oveja'])->name('oveja.index');

// menús
Route::get('/administrar-pruebas', [PruebasController::class, 'index'])->name('pruebas.index')->middleware('profesor');
Route::get('/sobre-nosotros', [SobreNosotrosController::class, 'index'])->name('sobre-nosotros.index');

Route::get('/', function () {
    return view('index');
})->name('index');
