<?php

use App\Http\Controllers\HangmanController;
use Illuminate\Support\Facades\Route;

Route::get('/hangman', [HangmanController::class, 'index'])->name('hangman.index');

Route::get('/', function () {
    return view('index');
})->name('index');
