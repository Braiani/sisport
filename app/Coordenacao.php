<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordenacao extends Model
{
    protected $table = 'coordenacoes';

    public function pessoas()
    {
        return $this->hasMany(Pessoa::class);
    }

    public function getSiglaCoordenacaoAttribute()
    {
        return $this->sigla . ' > ' . $this->nome;
    }
    
}
