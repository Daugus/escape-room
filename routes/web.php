<?php

use App\Http\Controllers\HangmanController;
use App\Http\Controllers\OvejaController;
use Illuminate\Support\Facades\Route;

Route::get('/hangman', [HangmanController::class, 'index'])->name('hangman.index');
Route::get('/oveja', [OvejaController::class, 'index'])->name('oveja.index');

Route::get('/', function () {
    return view('index');
})->name('index');
