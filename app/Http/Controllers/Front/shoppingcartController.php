<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class shoppingcartController extends Controller
{
   public function index(){

       return view('Front.shoppingCart');
   }

   public function add($id){
       $products = Product::find($id);
       View::share('Products',$products);

       return view('Front.shoppingCart');



   }
}
