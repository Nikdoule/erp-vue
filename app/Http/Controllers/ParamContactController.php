<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParamContactController extends Controller
{
    public function store()
    {

        return view('param-contact.create');
    }
}
