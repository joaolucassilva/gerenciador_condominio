<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WallLike extends Model
{
    use HasFactory;

    public $table = 'wall_likes';

    protected $fillable = [
        'id_wall',
        'id_user',
        'created_at',
        'updated_at'
    ];

}
