<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class color_product extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'color_products';

    protected $fillable = [
        'color_id',
        'product_id'
    ];
    /**
     * @var mixed
     */

}
