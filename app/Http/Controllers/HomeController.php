<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() 
    {
        return view('painel.home.index');
    }
    
    public function teste() 
    {
        return view('painel.home.teste');
    }
}
