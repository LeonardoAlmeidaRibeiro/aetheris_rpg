<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcao extends Model
{
    use HasFactory;

    protected $table = 'cad_bas_funcao';

    protected $fillable = [
        'nome', 'vida', 'ataque', 'defesa', 'movimento', 'descricao', 'gatilho', 'passiva', 'resposta'
    ];    
    public function getNomeAttribute($value)
    {
       return mb_strtoupper($value);
    }
    public function setNomeAttribute($value)
    {
        $this->attributes['nome'] = mb_strtoupper($value);
    }
}
