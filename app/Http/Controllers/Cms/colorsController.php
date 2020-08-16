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
            'color' => 'required'
        ]);

        $colors = new Colors();
        $colors->color=$request->input('color');

        $colors->save();
        return redirect()->route('Cms.news.color');
    }

}
