<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warning extends Model
{
    use HasFactory;

    public $table = 'warnings';

    protected $fillable = [
        'id_unit',
        'title',
        'status',
        'date_created',
        'photos',
        'created_at',
        'updated_at'
    ];
}
