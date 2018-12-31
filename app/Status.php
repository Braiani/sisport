<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    public $timestamps = false;
    
    public function scopePadraoCadastro($query)
    {
        return $query->where('padrao', 1);
    }
    
    public function scopePadraoVencimento($query)
    {
        return $query->where('padrao', 2);
    }
}
