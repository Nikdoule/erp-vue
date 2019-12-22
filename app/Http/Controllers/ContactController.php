<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Developper;
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
    public function create()
    {
        $developpers = Developper::all();
        
        return view('contact.create',[
            'developpers' => $developpers
        ]);
    }
    public function show($contactId)
    {
        $developpers = Developper::all();
        $contact = Contact::find($contactId);

        return view('contact.edit',[
            'contact' => $contact,
            'developpers' => $developpers
        ]);
        
    }
}
