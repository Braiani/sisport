<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Portaria;
use App\PessoasPortaria;
use Illuminate\Support\Facades\Auth;
use App\Pessoa;

class MinhasPortarias extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        if (Auth::user()->isAdmin() or Auth::user()->isDirge()) {
            $count = 0;
        }else{
            $user = Pessoa::where('siape', Auth::user()->siape)->first();
            $count = PessoasPortaria::where('pessoa_id', $user->id)->count();
        }
        
        if ($count <= 1) {
            $titulo = __('sisport.widgets.minhasPortarias.titulo-singular');
            $texto = trans_choice('sisport.widgets.minhasPortarias.texto-singular', $count);
        }else{
            $titulo = __('sisport.widgets.minhasPortarias.titulo-plural');
            $texto = trans_choice('sisport.widgets.minhasPortarias.texto-plural', $count);
        }

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-file-text',
            'title'  => "{$count} {$titulo}",
            'text'   => $texto,
            'button' => [
                'text' => 'Visualizar todas as portarias',
                'link' => route('voyager.portarias.index'),
            ],
            'image' => 'Minhas Portarias.jpg',
        ]));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}
