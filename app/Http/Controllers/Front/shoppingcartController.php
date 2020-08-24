<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\shopping_cart;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class shoppingcartController extends Controller
{
   public function index()
   {

       return view('Front.shoppingCart');
   }

   public function add($id,Request $request)
   {
    /*   foreach ($request -> products as $key_products => $product)
       {
           $basket = new shopping_cart();
           $basket -> product_id = $product -> id;
           $basket -> user_id = $user -> id;
       }*/

       $basket = new shopping_cart();
       $basket->product_id=$id;
       $basket->user_id =$request->user()->id;

       $basket->save();
       return view('Front.shoppingCart');
   }
}
