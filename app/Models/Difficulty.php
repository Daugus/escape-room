<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Difficulty extends Model
{
    use HasFactory;

    protected $table = 'difficulties';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'level', 'time'];

    public $timestamps = false;
}
