<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParamActionController extends Controller
{
    public function store()
    {

        return view('param-action.create');
    }
}
