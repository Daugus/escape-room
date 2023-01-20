<?php

use Illuminate\Support\Facades\Route;

// menú
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

// pruebas
use App\Http\Controllers\HangmanController;
use App\Http\Controllers\KukuController;
use App\Http\Controllers\GroupingController;
use App\Http\Controllers\EquilibradoController;

Route::get('/perfil', [AuthController::class, 'index'])->name('perfil.index');
Route::get('/login', [AuthController::class, 'index'])->name('login.index');
// Route::post('login/validate', [AuthController::class, 'login'])->name('login.validate');
Route::get('/registro', [AuthController::class, 'registro'])->name('registro.index');
// Route::post('/registro/validate', [AuthController::class, 'registrar'])->name('register.validate');
// Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('/hangman', [HangmanController::class, 'index'])->name('hangman.index');
Route::get('/kuku', [KukuController::class, 'index'])->name('kuku.index');
Route::get('/agrupando', [GroupingController::class, 'index'])->name('agrupando.index');
Route::get('/equilibrado', [EquilibradoController::class, 'index'])->name('equilibrado.index');

Route::get('/', function () {
    return view('index');
})->name('index');
