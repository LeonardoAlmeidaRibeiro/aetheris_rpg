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
            'vida' => 'required|integer|min:0',
            'ataque' => 'required|integer|min:0',
            'defesa' => 'required|integer|min:0',
            'movimento' => 'required|integer|min:0',
            'descricao' => 'nullable|string|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome é obrigatório.',
            'vida.required' => 'A vida é obrigatória.',
            'ataque.required' => 'O ataque é obrigatório.',
            'defesa.required' => 'A defesa é obrigatória.',
            'movimento.required' => 'O movimento é obrigatório.',
            'descricao.max' => 'A descrição não pode ter mais de 1000 caracteres.',
            // Adicione outras mensagens personalizadas conforme necessário
        ];
    }
}
