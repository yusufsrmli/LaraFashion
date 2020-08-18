<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table='size';

    public $timestamps = true;

    protected $fillable = [
        'name',
    ];

    public function product(){

        return  $this->hasMany(Product::class,'product_id');

    }
}
