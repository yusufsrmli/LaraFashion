<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';

    public $timestamps = true;

    protected $fillable = [
        'category',
    ];
}
