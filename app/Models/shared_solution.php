<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shared_solution extends Model
{
    use HasFactory;

    protected $table = 'shared_solutions';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'question', 'answer'];

    public $timestamps = false;
}
