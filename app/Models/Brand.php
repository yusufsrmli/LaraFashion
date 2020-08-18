<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table='brand';

    public $timestamps = true;

    protected $fillable = [
        'name',
    ];

    public function product(){
        return $this->hasMany(Product::class,'product_id');
    }
}
