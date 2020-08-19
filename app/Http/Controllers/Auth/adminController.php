<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
    $this->middleware('adminCheck');
}
   public function index(){
       return view('CMS.home');
   }


}
