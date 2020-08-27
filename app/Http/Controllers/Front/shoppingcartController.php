<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\shopping_cart;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class shoppingcartController extends Controller
{
   public function index()
   {

       return view('Front.shoppingCart');
   }

   public function add(Request $request)
   {
        $basket = new shopping_cart();
        $basket -> fill($request->all());
        $basket-> user_id = request()->user()->id;

        $basket->save();

       /*
       $basket->product_id=$id;
       $basket->user_id =$request->user()->id;*/


       return Response::json([
          'message' => 'true'
       ]);
   }
}
