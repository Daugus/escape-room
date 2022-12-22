<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SharedSolution extends Model
{
    use HasFactory;

    protected $table = 'shared_solutions';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'question', 'answer'];

    public $timestamps = false;

    public function challenge()
    {
        return $this->belongsTo(Challenge::class, 'foreign_key');
    }
}
