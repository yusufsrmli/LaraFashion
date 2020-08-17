<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use SebastianBergmann\CodeCoverage\TestFixture\C;

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
            'name' => 'required'
        ]);

        $category = new Category();
       $category->fill($request->all());

        $category->save();
        return redirect()->route('Cms.news.category');
    }
    public function edit($id){
        $category = Category::find($id);
        View::share('category',$category);
        return view('CMS.edits.categoryEdit');
    }

    public function edit_category($id, Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();

        return redirect()->route('Cms.list.category');



    }
    public function remove($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('Cms.list.category');



    }


}
