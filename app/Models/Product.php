<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'products' ;

    public $timestamps = true ;

    protected $fillable = [
        'image',
        'product_name',
        'brand_id',
        'category_id',
        'size_id'
    ];

//    public function producttypeidrelation()
//    {
//        return $this->belongsTo(producttypeCategory::class, 'producttypeid');
//    }
//
//    public function sizeidrelation()
//    {
//        return $this->belongsTo(sizeCategory::class, 'sizeid');
//    }

    public function colors()
    {
        return $this->hasMany(color_product::class, 'product_id');
    }
}
