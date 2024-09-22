<?php

namespace App\Http\Controllers;

use App\Models\Funcao;
use App\Models\Personagem;
use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    public function index()
    {
        return view('champion.index');
    }


    public function create()
    {
        $funcoes = Funcao::all(); // Obtenha todas as funções para o dropdown
        return view('painel.personagens.create', compact('funcoes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'funcao_id' => 'required|exists:cad_bas_funcao,id',
            'poderes.*.nome' => 'required|string|max:255',
            'poderes.*.alcance' => 'required|integer',
            'poderes.*.alvo' => 'required|string',
            'poderes.*.sucesso' => 'required|string',
            'poderes.*.efeito' => 'required|string',
            'poderes.*.fracasso' => 'required|string',
        ]);

        $personagem = Personagem::create($request->only('nome', 'funcao_id'));

        foreach ($request->poderes as $poderData) {
            $personagem->poderes()->create($poderData);
        }

        return redirect()->route('personagem.create')->with('success', 'Personagem criado com sucesso!');
    }
}
