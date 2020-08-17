<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Colors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class colorsController extends Controller
{
    public function list(){

        $colors = Colors::all();
        View::share('colors',$colors);
        return view('CMS.lists.colorList');

    }

    public function index(){
        return view('CMS.news.color');

    }
    public function create_color(Request $request){
        $request->validate([
            'name' => 'required'
        ]);

        $colors = new Colors();
        $colors->fill($request->all());

        $colors->save();
        return redirect()->route('Cms.news.color');
    }
    public function edit($id){
        $color = Colors::find($id);
        View::share('color',$color);
        return view('CMS.edits.colorEdit');
    }

    public function edit_color($id, Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        $color= Colors::find($id);
        $color->fill($request->all());
        $color->save();

        return redirect()->route('Cms.list.color');

    }
     public function remove($id){
        $color = Colors::find($id);
        $color->delete();

        return redirect()->route('Cms.list.color');
     }

}
