<?php

use App\Http\Controllers\HangmanController;
use App\Http\Controllers\KukuController;
use Illuminate\Support\Facades\Route;

Route::get('/hangman', [HangmanController::class, 'index'])->name('hangman.index');
Route::get('/kuku', [KukuController::class, 'index'])->name('kuku.index');

Route::get('/', function () {
    return view('index');
})->name('index');
