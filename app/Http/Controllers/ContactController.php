<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        
        return view('contact.contact',[
            'contacts' => $contacts
        ]);
    }
}
