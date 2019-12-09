<?php

namespace App\Http\Controllers;

use App\Deal;
use App\Contact;
use Illuminate\Http\Request;

class DealController extends Controller
{
    public function index()
    {
        $deals = Deal::all();
        $contacts = Contact::all();
        
        return view('deal.view',[
            'deals' => $deals,
            'contacts' => $contacts
        ]);
    }
    public function store()
    {
        $contacts = Contact::all();
        return view('deal.create',[
            'contacts' => $contacts
        ]);
    }
    public function edit($dealId)
    {
        $deals = Deal::all();
        $contacts = Contact::all();
        $deal = Deal::find($dealId);

        return view('deal.edit',[
            'deal' => $deal,
            'contacts' => $contacts,
            'deals' => $deals
        ]);
        
    }
}
