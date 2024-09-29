<?php

namespace App\Http\Controllers;

use App\Models\Personagem;
use Illuminate\Http\Request;

class Champion extends Controller
{

    public function index() 
    {
        $campeoes = Personagem::all();
         return view('painel.champion.index',compact('campeoes'));

    }

    public function draven() 
    {
        return view('painel.champion.Draven');

    }

}
