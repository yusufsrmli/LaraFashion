<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Colors;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class indexController extends Controller
{

    public function index(){

        $products = Product::all();
        View::share('products',$products);
        $sizes = Size::all();
        View::share('sizes',$sizes);
        $categories = Category::all();
        View::share('categories',$categories);
        $colors = Colors::all();
        View::share('colors',$colors);
        $brands = Brand::all();
        View::share('brands',$brands);

        return view('Front.index');

    }

    public function archive($id){
        $product =Product::Find($id);
        View::share('product',$product);
        return view('Front.product');


    }

}
