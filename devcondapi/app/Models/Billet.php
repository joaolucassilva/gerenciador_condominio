<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
    use HasFactory;

    public $table = 'billets';

    protected $fillable = [
        'id_unit',
        'title',
        'file_url',
        'created_at',
        'updated_at'
    ];
}
