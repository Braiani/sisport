<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portaria extends Model
{
    protected $guarded = [];

    // protected $table = 'portarias';

    public function pessoas()
    {
        return $this->belongsToMany(Pessoa::class, 'pessoas_portarias');
    }
    
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function getPortariaDescricaoAttribute()
    {
        return $this->port_num . ' - ' . $this->descricao;
    }

    public function getPortariaMembroAttribute()
    {
        $resultado = '';
        foreach ($this->pessoas as $key => $value) {
            $resultado = $resultado . "<i class='voyager-person'></i>" . $value->nome . '<br />';
        }
        return $resultado;
    }
}
