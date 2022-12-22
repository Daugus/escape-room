<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;

    protected $table = 'user_group';
    protected $primaryKey = ['user_id', 'group_id'];
    protected $fillable = ['user_id', 'group_id'];

    public $timestamps = false;
    public $incrementing = false;
}
