<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;

    public $table = 'docs';

    protected $fillable = [
        'title',
        'file_url',
        'created_at',
        'updated_at'
    ];
}
