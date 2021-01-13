<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public $table = 'units';

    protected $fillable = [
        'name',
        'id_owner',
        'created_at',
        'upadted_at'
    ];
}
