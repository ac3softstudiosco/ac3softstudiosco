<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function public(){
        return view('front.contact');
    }

    public function index(){

        $contacts = Contact::orderBy('id', 'desc')->paginate(9);

        return view('admin.contacts.index', compact('contacts'));
    }

    public function store(Request $request){

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->route('home');
    }
}
