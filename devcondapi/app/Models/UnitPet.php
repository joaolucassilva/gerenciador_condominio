<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitPet extends Model
{
    use HasFactory;

    public $table = 'unit_pets';

    protected $hidden = [
    ];

    protected $fillable = [
        'id_unit',
        'name',
        'race',
        'created_at',
        'updated_at'
    ];
}
