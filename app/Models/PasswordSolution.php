<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordSolution extends Model
{
    use HasFactory;

    protected $table = 'password_solutions';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'element', 'discovery_year', 'text', 'code', 'image'];

    public $timestamps = false;
}
