<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PessoasPortariaPivot extends Pivot
{
    protected $casts = [
        'data_relatorio' => 'date',
        'entregou_relatorio' => 'boolean'
    ];
}
