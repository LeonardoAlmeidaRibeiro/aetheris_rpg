<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncaoRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Altere isso conforme a lógica de autorização desejada
    }

    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'funcao_id' => 'required|exists:cad_bas_funcao,id',
            'poderes.*.nome' => 'required|string|max:255',
            'poderes.*.alcance' => 'required|integer',
            'poderes.*.alvo' => 'required|string',
            'poderes.*.sucesso' => 'required|string',
            'poderes.*.efeito' => 'required|string',
            'poderes.*.fracasso' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome é obrigatório.',
            'nome.unique' => 'Essa função já está cadastrada    .',
            'vida.required' => 'A vida é obrigatória.',
            'ataque.required' => 'O ataque é obrigatório.',
            'defesa.required' => 'A defesa é obrigatória.',
            'movimento.required' => 'O movimento é obrigatório.',
            'descricao.max' => 'A descrição não pode ter mais de 1000 caracteres.',
            // Adicione outras mensagens personalizadas conforme necessário
        ];
    }
}
