<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParamTodoController extends Controller
{
    public function store()
    {

        return view('param-todo.create');
    }
}
