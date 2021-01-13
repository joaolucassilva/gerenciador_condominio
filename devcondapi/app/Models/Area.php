<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public $table = 'areas';

    protected $fillable = [
        'allowed',
        'title',
        'cover',
        'days',
        'start_time',
        'end_time',
        'created_at',
        'updated_at'
    ];
}
