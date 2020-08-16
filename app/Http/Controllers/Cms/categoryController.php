<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Colors;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        return view('CMS.news.category');

    }
    public function create_category(Request $request){

        $request->validate([
            'category' => 'required'
        ]);

        $category = new Category();
        $category->category=$request->input('category');

        $category->save();
        return redirect()->route('Cms.news.category');
    }

}
