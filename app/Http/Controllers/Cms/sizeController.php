<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Colors;
use App\Models\Size;
use Illuminate\Http\Request;

class sizeController extends Controller
{
    public function index(){
        return view('CMS.news.size');
    }

    public function create_size(Request $request){

        $request->validate([
           'size' => 'required'
        ]);

        $size = new Size();
        $size->size=$request->input('size');

        $size->save();
        return redirect()->route('Cms.news.size');
    }
}
