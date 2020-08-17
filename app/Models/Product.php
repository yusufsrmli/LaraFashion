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
        'name',

        'brand_id',
        'category_id',
        'size_id',
        'price',
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

    public function brand()
    {
        return $this -> belongsTo(Brand::class , 'brand_id');
    }

    public function category()
    {
        return $this -> belongsTo(Category::class , 'category_id');
    }

    public function size()
    {
        return $this -> belongsTo(Size::class , 'size_id');
    }

    public function colors()
    {
        return $this->hasMany(color_product::class, 'product_id');
    }
}
