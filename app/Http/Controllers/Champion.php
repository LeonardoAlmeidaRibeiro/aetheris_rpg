<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Champion extends Controller
{

    public function index() 
    {
         return view('painel.champion.index');

    }

    public function draven() 
    {
        return view('painel.champion.Draven');

    }

}
