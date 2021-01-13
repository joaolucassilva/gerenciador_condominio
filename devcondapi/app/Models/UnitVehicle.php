<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitVehicle extends Model
{
    use HasFactory;

    public $table = 'unit_vehicles';

    protected $fillable = [
        'id_unit',
        'title',
        'color',
        'place',
        'created_at',
        'updated_at'
    ];
}
