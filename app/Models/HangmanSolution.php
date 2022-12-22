<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HangmanSolution extends Model
{
    use HasFactory;

    protected $table = 'hangman_solutions';
    protected $primaryKey = 'id';
    protected $fillable = ['microorganism'];

    public $timestamps = false;
}
