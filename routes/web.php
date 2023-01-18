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
Route::get('/login/authenticate', [LoginController::class, 'index'])->name('login.authenticate');
Route::get('/registro', [RegistroController::class, 'index'])->name('registro.index');
Route::get('/perfil', [ProfileController::class, 'index'])->name('perfil.index')->middleware('auth');

Route::get('/hangman', [HangmanController::class, 'index'])->name('hangman.index')->middleware('auth');
Route::get('/kuku', [KukuController::class, 'index'])->name('kuku.index')->middleware('auth');
Route::get('/agrupando', [GroupingController::class, 'index'])->name('agrupando.index')->middleware('auth');
Route::get('/equilibrado', [EquilibradoController::class, 'index'])->name('equilibrado.index')->middleware('auth');

Route::get('/', function () {
    return view('index');
})->name('index');
