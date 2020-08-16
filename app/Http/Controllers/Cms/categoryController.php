<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Colors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class categoryController extends Controller
{
    public function list(){
        $categories = Category::all();
        View::share('categories',$categories);

        return view('CMS.lists.categoryList');
    }
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
