<?php

namespace App\Http\Controllers;

use App\Developper;
use Illuminate\Http\Request;

class BusinessDevlopperController extends Controller
{
    public function index()
    {
        $developpers = Developper::all();
        
        return view('business-developper.view',[
            'developpers' => $developpers
        ]);
    }
    public function store()
    {
        return view('business-developper.create');
    }
    public function show($developperId)
    {
        
        $developper = Developper::find($developperId);
            
        return([
            'developper'  => $developper,
        ]);
        
    }
}   
