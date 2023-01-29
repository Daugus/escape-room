<?php

use Illuminate\Support\Facades\Route;

// menú
use App\Http\Controllers\UserController;

// laboratoriao
use App\Http\Controllers\LabController;

// pruebas
use App\Http\Controllers\OvejaController;
use App\Http\Controllers\HangmanController;
use App\Http\Controllers\KukuController;
use App\Http\Controllers\GroupingController;
use App\Http\Controllers\EquilibradoController;
use App\Http\Controllers\SobreNosotrosController;

/*
    middlewares (especificados en Kernel.php):
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
Route::get('/lab', [LabController::class, 'index'])->name('laboratorio.index');

Route::get('/hangman', [HangmanController::class, 'index'])->name('hangman.index');
Route::get('/kuku', [KukuController::class, 'index'])->name('kuku.index');
Route::get('/agrupando', [GroupingController::class, 'index'])->name('agrupando.index');
Route::get('/equilibrado', [EquilibradoController::class, 'index'])->name('equilibrado.index');
Route::get('/oveja', [OvejaController::class, 'index'])->name('oveja.index');

// menús
Route::get('/sobre-nosotros', [SobreNosotrosController::class, 'index'])->name('sobre-nosotros.index');

Route::get('/', function () {
    return view('index');
})->name('index');
