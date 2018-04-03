<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $guarded = [];

    public function coordenacao()
    {
        return $this->belongsTo(Coordenacao::class, 'id');
    }

    public function portarias()
    {
        return $this->belongsToMany(Portaria::class, 'pessoas_portarias');
    }

    public function getPessoaCoordenacaoAttribute()
    {
        return $this->coordenacao;
    }
}
