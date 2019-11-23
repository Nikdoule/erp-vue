<?php

namespace App\Http\Controllers;

use App\Developper;
use Illuminate\Http\Request;

class BusinessDevlopperController extends Controller
{
    public function index()
    {
        $developpers = Developper::all();
        
        return view('business.developper',[
            'developpers' => $developpers
        ]);
    }
    public function store()
    {
        return view('create.business-developper');
    }
}   
