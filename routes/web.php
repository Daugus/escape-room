<?php

use Illuminate\Support\Facades\Route;

// menú
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

// pruebas
use App\Http\Controllers\OvejaController;
use App\Http\Controllers\HangmanController;
use App\Http\Controllers\KukuController;
use App\Http\Controllers\GroupingController;
use App\Http\Controllers\EquilibradoController;

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/registro', [UserController::class, 'create'])->name('user.create');
Route::post('/registro', [UserController::class, 'store'])->name('user.store');

Route::get('/hangman', [HangmanController::class, 'index'])->name('hangman.index');
Route::get('/kuku', [KukuController::class, 'index'])->name('kuku.index');
Route::get('/agrupando', [GroupingController::class, 'index'])->name('agrupando.index');
Route::get('/equilibrado', [EquilibradoController::class, 'index'])->name('equilibrado.index');
Route::get('/oveja', [OvejaController::class, 'index'])->name('oveja.index');


Route::get('/', function () {
    return view('index');
})->name('index');
