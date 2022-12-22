<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['role', 'name', 'surname', 'nickname', 'password', 'email', 'picture'];

    public $timestamps = false;

    public function groups()
    {
        return $this->belongsToMany(Alumno::class, 'user_group');
    }
}
