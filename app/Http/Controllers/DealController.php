<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DealController extends Controller
{
    public function index()
    {
        return view('deal.deal');
    }
    public function store()
    {
        return view('create.deal');
    }
}
