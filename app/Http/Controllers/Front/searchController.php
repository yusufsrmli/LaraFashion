<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class searchController extends Controller
{
    public function search(){
        $search = request()->input('search');
        $results = Product::where('name','like',"%$search%")->get();
        /*$category = Category::where('name','like', "%$search%")->get();*/
        View::share('results', $results);

        return view('Front.search');

    }
}

/*$results = Product::where('name','like',"%$search%")->with(['category' => function($search){
    $search->select(['name']);
}] )->get();*/
