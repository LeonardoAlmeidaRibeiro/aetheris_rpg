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
        // Cria uma nova instância do modelo Funcao
        $funcao = new Funcao();
        
        // Atribui os valores do request ao modelo
        $funcao->nome = $request->input('nome');
        $funcao->vida = $request->input('vida');
        $funcao->ataque = $request->input('ataque');
        $funcao->defesa = $request->input('defesa');
        $funcao->movimento = $request->input('movimento');
        $funcao->descricao = $request->input('descricao');
        
        // Salva a função no banco de dados
        $funcao->save();
        
        // Redireciona com uma mensagem de sucesso
        return redirect()->route('funcao.create')->with('success', 'Função cadastrada com sucesso!');
    }
}
