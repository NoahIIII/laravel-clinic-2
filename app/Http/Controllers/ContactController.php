<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index()
    {
        return view('front.contact');
    }
    function create(Request $request)
    {
        $request->validate([
        'name'=>'required|min:2|max:20',
        'email'=>'required|email',
        'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
        'message'=>'required|min:7|max:255',
        'subject'=>'required|min:3|max:20'

    ]);
        $data=$request->except('_token');
        Contact::create($data);
        return redirect(route('contact'))->with('suc','Your Message Sent');
    }
    function destroy(Request $request,$id)
    {
        // $request->validate(['id' => 'required|exists:contact,id'], ['id.exists' => 'There is no major with that id']);

        Contact::find($id)->delete();
        return redirect(route('contactsview'))->with('suc','Contact Deleted');
    }
}
