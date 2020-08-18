<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class shopController extends Controller
{
    public function index(){
        $products = Product::all();
        View::share('products',$products);
        return view('Front.shop');

    }
}
