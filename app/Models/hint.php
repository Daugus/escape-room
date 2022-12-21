<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hint extends Model
{
    use HasFactory;

    protected $table = 'hints';
    protected $primaryKey = 'id';
    protected $fillable = ['order', 'text'];

    public $timestamps = false;
}
