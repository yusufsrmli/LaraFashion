<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class contactController extends Controller
{
    public function list(){

        $contacts = Contact::all();
        View::share('contacts',$contacts);
        return view('CMS.lists.contactlist');
    }
    public function index(){
        return view('CMS.news.contact');

    }
    public function create_contact(Request $request){

        $request->validate([
           'contactname' => 'required|max:100',
            'contact' => 'required',
            'number' => 'required'
        ]);

        $contact = new Contact();
        $contact->contactname=$request->input('contactname');
        $contact->contact=$request->input('contact');
        $contact->number=$request->input('number');
        $contact->save();
        return redirect()->route('Cms.news.contact');
    }
}
