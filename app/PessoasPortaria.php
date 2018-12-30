<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PessoasPortaria extends Model
{
    public $timestamps = false;
    
    protected $dates = [
        'data_relatorio',
    ];
}
