<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class sizeController extends Controller
{
    public function list(){

        $sizes = Size::all();
        View::share('sizes',$sizes);
        return view('CMS.lists.sizeList');
    }

    public function index(){
        return view('CMS.news.size');
    }

    public function create_size(Request $request){

        $request->validate([
           'name' => 'required'
        ]);

        $size = new Size();
      $size->fill($request->all());

        $size->save();
        return redirect()->route('Cms.news.size');
    }
    public function edit($id){
        $size = Size::find($id);
        View::share('size',$size);
        return view('CMS.edits.sizeEdit');
    }

    public function edit_size($id, Request $request){
        $request->validate([
            'name' => 'required'
        ]);

        $size= Size::find($id);
        $size->fill($request->all());
        $size->save();

        return redirect()->route('Cms.list.size');

    }

    public function remove($id){
        $size = Size::find($id);
        $size->delete();
        return redirect()->route('Cms.list.size');

    }
}
