<?php

use Illuminate\Support\Facades\Route;

// menú
use App\Http\Controllers\UserController;

// pruebas
use App\Http\Controllers\OvejaController;
use App\Http\Controllers\HangmanController;
use App\Http\Controllers\KukuController;
use App\Http\Controllers\GroupingController;
use App\Http\Controllers\EquilibradoController;

Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/login', [UserController::class, 'validateLogin'])->name('user.validate');
Route::get('/signup', [UserController::class, 'create'])->name('user.create');
Route::post('/signup', [UserController::class, 'store'])->name('user.store');

Route::get('/hangman', [HangmanController::class, 'index'])->name('hangman.index');
Route::get('/kuku', [KukuController::class, 'index'])->name('kuku.index')->middleware('session');
Route::get('/agrupando', [GroupingController::class, 'index'])->name('agrupando.index');
Route::get('/equilibrado', [EquilibradoController::class, 'index'])->name('equilibrado.index');
Route::get('/oveja', [OvejaController::class, 'index'])->name('oveja.index');


Route::get('/', function () {
    return view('index');
})->name('index');
