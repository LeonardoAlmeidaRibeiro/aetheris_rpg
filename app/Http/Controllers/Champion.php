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

    public function show($id) 
    {
        $campeao = Personagem::with('poderes')->find($id);
         return view('painel.champion.details',compact('campeao'));

    }

    public function draven() 
    {
        return view('painel.champion.Draven');
    
    }

}
