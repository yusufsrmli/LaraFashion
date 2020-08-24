<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class shopping_cart extends Model
{
   

    public $timestamps = true ;

    protected $fillable = [
        'user_id',
        'product_id',
    ] ;
}

