<?php

namespace App\Http\Controllers;

use App\Developper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BusinessDevlopperController extends Controller
{
    public function index()
    {
        $developpers = Developper::all();

        return view('business-developper.view',[
            'developpers' => $developpers
        ]);
    }
    public function create()
    {
        return view('business-developper.create');
    }
    public function show($developperId)
    {
        if (Gate::denies('edit-business-developper')) {
            // The current user can't edit the developper...
            return redirect()->route('business-developpers.index');
        }
        $developper = Developper::find($developperId);

        return view('business-developper.edit',[
            'developper' => $developper
        ]);
        
    }
}   
