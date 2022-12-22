<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $table = 'challenges';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public $timestamps = false;


    public function hints()
    {
        return $this->belongsToMany(hint::class, 'foreign_key');
    }

    public function shared_solutions()
    {
        return $this->belongsToMany(shared_solution::class, 'foreign_key');
    }
}
