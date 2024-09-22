<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poder extends Model
{
    protected $table = 'personagem_poderes';

    protected $fillable = ['personagem_id', 'nome', 'alcance', 'alvo', 'prejuizo', 'beneficio', 'sucesso', 'efeito', 'fracasso'];

    public function personagem()
    {
        return $this->belongsTo(Personagem::class);
    }
}
