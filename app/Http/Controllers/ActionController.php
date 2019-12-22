<?php

namespace App\Http\Controllers;

use App\Deal;
use App\Action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActionController extends Controller
{
    public function store($dealId)
    {
        $deal = Deal::find($dealId);

        return view('action.create',[
            'deal' => $deal
        ]);
    }
    public function show($dealId)
    {
        $deal = Deal::find($dealId);
        $actions = Deal::find($dealId)->actions()->get();

        return view('action.view',[
            'deal' => $deal,
            'actions' => $actions
        ]);
    }
}
