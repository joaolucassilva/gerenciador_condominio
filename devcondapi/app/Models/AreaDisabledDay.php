<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaDisabledDay extends Model
{
    use HasFactory;

    public $table = 'area_disabled_days';

    protected $fillable = [
        'id_area',
        'created_at',
        'updated_at'
    ];

}
