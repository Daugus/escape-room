<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hangman_solution extends Model
{
    use HasFactory;

    protected $table = 'hangman_solutions';
    protected $primaryKey = 'id';
    protected $fillable = ['microorganisms'];

    public $timestamps = false;
}
