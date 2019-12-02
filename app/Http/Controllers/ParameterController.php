<?php

namespace App\Http\Controllers;

use App\Param_todo;
use App\Param_action;
use App\Param_contact;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function index()
    {
        $param_actions = Param_action::all();
        $param_contacts = Param_contact::all();
        $param_todos = Param_todo::all();

        return view('parameter.view',[

            'param_actions' => $param_actions,
            'param_contacts' => $param_contacts,
            'param_todos' => $param_todos

        ]);
    }
}
