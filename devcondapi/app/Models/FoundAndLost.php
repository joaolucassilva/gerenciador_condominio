<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundAndLost extends Model
{
    use HasFactory;

    public $table = 'found_and_lost';

    protected $fillable = [
        'status',
        'photo',
        'description',
        'where',
        'date_created',
        'created_at',
        'updated_at'
    ];
}
