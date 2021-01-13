<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitPeople extends Model
{
    use HasFactory;

    public $table = 'unit_peoples';

    protected $fillable = [
        'id_unit',
        'name',
        'birthdate',
        'created_at',
        'updated_at'
    ];
}
