<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wall extends Model
{
    use HasFactory;

    public $table = 'walls';

    protected $fillable = [
        'titulo',
        'body',
        'date_created',
        'created_at',
        'update_at'
    ];
}
