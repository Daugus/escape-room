<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(UserGroup::class, 'user_group');
    }
}
