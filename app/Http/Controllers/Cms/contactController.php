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
       $contact->fill($request->all());
        $contact->save();
        return redirect()->route('Cms.news.contact');
    }

    public function edit($id){
        $contact = Contact::find($id);
        View::share('contact',$contact);
        return view('CMS.edits.contactEdit');
    }

    public function edit_contact($id, Request $request){
        $request->validate([
            'contactname' => 'required|max:100',
            'contact' => 'required',
            'number' => 'required'
        ]);
        $contact= Contact::find($id);
        $contact->fill($request->all());
        $contact->save();

        return redirect()->route('Cms.list.contact');

    }
    public function remove($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('Cms.list.contact');

    }
}
