<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convite extends Model
{
    protected $dates = ['prazo'];

    protected $fillable = ['titulo', 'prazo', 'send_copy', 'informacoes', 'sent'];
}
