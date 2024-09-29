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
            'token' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'imagem' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            // 'poderes.*.nome' => 'required|string|max:255',
            // 'poderes.*.alcance' => 'required|integer|min:0',
            // 'poderes.*.alvo' => 'required|string',
            // 'poderes.*.sucesso' => 'required|string',
            // 'poderes.*.efeito' => 'required|string',
            // 'poderes.*.fracasso' => 'required|string',
        ]);

        try {
            // Salvar a imagem
            $path = $request->file('imagem')->store('imagens/personagens', 'public');
    
            // Criar o personagem
            $personagem = Personagem::create($request->only('nome', 'funcao_id') + ['token' => $path]);
    
            return redirect()->route('personagem.create')->with('success', 'Personagem criado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('personagem.create')->with('error', 'Erro ao criar personagem: ' . $e->getMessage());
        }
    }
}
