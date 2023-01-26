<?php

use Illuminate\Support\Facades\Route;

// menú
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;

// laboratoriao
use App\Http\Controllers\LabController;

// pruebas
use App\Http\Controllers\OvejaController;
use App\Http\Controllers\HangmanController;
use App\Http\Controllers\KukuController;
use App\Http\Controllers\GroupingController;
use App\Http\Controllers\EquilibradoController;
use App\Http\Controllers\SobreNosotrosController;

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/registro', [RegistroController::class, 'index'])->name('registro.index');
Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');
Route::get('/sobre-nosotros', [SobreNosotrosController::class, 'index'])->name('sobre-nosotros.index');

Route::get('/lab', [LabController::class, 'index'])->name('laboratorio.index');

Route::get('/hangman', [HangmanController::class, 'index'])->name('hangman.index');
Route::get('/kuku', [KukuController::class, 'index'])->name('kuku.index');
Route::get('/agrupando', [GroupingController::class, 'index'])->name('agrupando.index');
Route::get('/equilibrado', [EquilibradoController::class, 'index'])->name('equilibrado.index');
Route::get('/oveja', [OvejaController::class, 'index'])->name('oveja.index');


Route::get('/', function () {
    return view('index');
})->name('index');
