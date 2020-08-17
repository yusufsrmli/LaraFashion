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
            'name' => 'required'
        ]);

        $brand = new Brand();
        $brand->name=$request->input('name');

        $brand->save();
        return redirect()->route('Cms.news.brand');
    }



    public function edit($id){
        $brand = Brand::find($id);
        View::share('brand',$brand);
        return view('CMS.edits.brandEdit');
    }

    public function edit_brand($id, Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        $brand = Brand::find($id);
        $brand->fill($request->all());
        $brand->save();

        return redirect()->route('Cms.list.brand');

    }

    public function remove($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('Cms.list.brand');
    }

}
