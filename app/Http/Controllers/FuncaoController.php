<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FuncaoRequest;
use App\Models\Funcao;

class FuncaoController extends Controller
{
    public function index()
    {
        $funcoes = Funcao::all();
        return view('painel.funcao.index',compact('funcoes'));
    }

    public function create()
    {
        return view('painel.funcao.create');
    }

    public function store(FuncaoRequest $request)
    {
        $validator = $request->validated();
        try {
           $funcao =  Funcao::create($validator);

            return redirect()->route('funcao.create')->with('success', 'Função cadastrada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('funcao.create')->with('error', 'Erro ao cadastrar a função: ' . $e->getMessage())->withInput();
        }
    }
    
}
