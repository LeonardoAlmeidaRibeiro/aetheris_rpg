<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    // Página inicial do site, contando a história do jogo
    public function home()
    {
        return view('riot.home');
    }

    // Página onde o jogo será exibido
    public function showGame()
    {
        return view('riot.game');
    }

    // Página com os tipos de baralho
    public function showDeckTypes()
    {
        return view('riot.decks');
    }

    public function hero()
    {
        return view('riot.hero');
    }
}