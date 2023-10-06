<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shaurma extends Model
{
    use HasFactory;

    protected $table = 'shaurmas';

    protected $fillable = [
        'name',
        'image',
        'weight',
        'price',
        'rating',
    ];
}
