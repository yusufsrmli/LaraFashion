<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Colors;
use Illuminate\Http\Request;

class colorsController extends Controller
{

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
