<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portaria extends Model
{
    protected $guarded = [];
    
    protected $pessoas = true;
    
    protected $dates = [
        'data_emissao', 'vencimento'
    ];

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
    
    public function scopeRestrito($query, $restrito, $user)
    {
        return $query->where('restrito', $restrito)->orWhereIn('id', function ($query) use ($user) {
            $query->select('portaria_id')->from('pessoas_portarias')->where('pessoa_id', $user->pessoa->id);
        });
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
