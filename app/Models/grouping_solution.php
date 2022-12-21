<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grouping_solution extends Model
{
    use HasFactory;

    protected $table = 'shared_solutions';
    protected $primaryKey = 'id';
    protected $fillable = ['field', 'concept'];

    public $timestamps = false;
}
