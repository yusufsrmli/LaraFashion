<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';

    public $timestamps = true;

    protected $fillable = [
        'name',
    ];
    public function product(){

        return $this->hasMany(Product::class, 'product_id');
    }
}
