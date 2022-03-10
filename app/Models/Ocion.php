<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'image',
        'name',
        'description',
        'available',
        'slot',
        'pricelist',
        'payment',
        'collaboration'
    ];

    protected $table = 'ocions';
};
