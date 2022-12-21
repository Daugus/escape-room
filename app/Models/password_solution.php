<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class password_solution extends Model
{
    use HasFactory;

    protected $table = 'shared_solutions';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'element', 'discovery_year', 'text', 'code'];

    public $timestamps = false;
}
