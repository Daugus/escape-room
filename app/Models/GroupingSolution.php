<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupingSolution extends Model
{
    use HasFactory;

    protected $table = 'grouping_solutions';
    protected $primaryKey = 'id';
    protected $fillable = ['field', 'concept'];

    public $timestamps = false;
}
