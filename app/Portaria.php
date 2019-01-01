<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portaria extends Model
{
    protected $guarded = [];
    
    protected $pessoas = true;

    // protected $table = 'portarias';

    public function pessoas()
    {
        return $this->belongsToMany(Pessoa::class, 'pessoas_portarias')
                    ->withPivot('data_relatorio', 'entregou_relatorio', 'declaracao');
    }
    
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    
    public function scopeRestrito($query, $restrito)
    {
        return $query->where('restrito', $restrito);
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
