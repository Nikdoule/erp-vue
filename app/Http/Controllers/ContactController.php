<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        
        return view('contact.view',[
            'contacts' => $contacts
        ]);
    }
    public function store()
    {
        return view('contact.create');
    }
}
