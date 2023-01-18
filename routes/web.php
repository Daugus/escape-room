<?php

use Illuminate\Support\Facades\Route;

// menú
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ProfileController;

// pruebas
use App\Http\Controllers\HangmanController;
use App\Http\Controllers\KukuController;
use App\Http\Controllers\GroupingController;
use App\Http\Controllers\EquilibradoController;

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/registro', [RegistroController::class, 'index'])->name('registro.index');
Route::get('/perfil', [ProfileController::class, 'index'])->name('perfil.index');

Route::get('/hangman', [HangmanController::class, 'index'])->name('hangman.index');
Route::get('/kuku', [KukuController::class, 'index'])->name('kuku.index');
Route::get('/agrupando', [GroupingController::class, 'index'])->name('agrupando.index');
Route::get('/equilibrado', [EquilibradoController::class, 'index'])->name('equilibrado.index');

Route::get('/', function () {
    return view('index');
})->name('index');
