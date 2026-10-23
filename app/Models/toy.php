<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    protected $table = 'toys';

    protected $fillable = [
        'name',
        'age_group',
        'category',
        'price',
        'image',
        'description',
    ];
}