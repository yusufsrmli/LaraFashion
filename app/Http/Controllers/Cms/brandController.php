<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class brandController extends Controller
{

    Public function list(){
        $brands = Brand::all();
        View::share('brands',$brands);

    return view('CMS.lists.brandList');
    }

    public function index(){

        return view('CMS.news.brand');


    }
    public function create_brand(Request $request){

        $request->validate([
            'brand' => 'required'
        ]);

        $brand = new Brand();
        $brand->brand=$request->input('brand');

        $brand->save();
        return redirect()->route('Cms.news.brand');
    }
}
