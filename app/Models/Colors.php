<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    protected $table='colors';

    public $timestamps = true;

    protected $fillable = [
      'name',
    ];
public function product(){

    return $this->hasMany(Product::class,'product_id');
}

}
