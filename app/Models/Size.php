<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table='size';

    public $timestamps = true;

    protected $fillable = [
        'size',
    ];
}
