<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';
    protected $primaryKey = 'id';
    protected $fillable = ['time', 'state', 'used_hints'];

    public $timestamps = false;
}
