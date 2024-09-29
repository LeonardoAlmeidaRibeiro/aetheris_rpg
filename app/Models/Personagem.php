<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    use HasFactory;
    protected $table = 'personagens';

    protected $fillable = ['nome', 'funcao_id', 'token', 'imagem'];

    public function poderes()
    {
        return $this->hasMany(Poder::class);
    }

    public function funcao()
    {
        return $this->belongsTo(Funcao::class, 'funcao_id');
    }
}
