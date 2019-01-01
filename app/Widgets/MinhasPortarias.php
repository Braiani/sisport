<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
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
        $user = Auth::user()->pessoa;
        $count = PessoasPortaria::where('pessoa_id', $user->id)->count();
        $link = route('voyager.pessoas.show', $user->id);
        
        if ($count <= 1) {
            $titulo = __('sisport.widgets.minhasPortarias.titulo-singular');
            $texto = trans_choice('sisport.widgets.minhasPortarias.texto-singular', $count);
        } else {
            $titulo = __('sisport.widgets.minhasPortarias.titulo-plural');
            $texto = trans_choice('sisport.widgets.minhasPortarias.texto-plural', $count);
        }

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-file-text',
            'title'  => "{$count} {$titulo}",
            'text'   => $texto,
            'button' => [
                'text' => 'Visualizar minhas portarias',
                'link' => $link,
            ],
            'image' => 'Minhas Portarias.jpg',
        ]));
    }

    public function shouldBeDisplayed()
    {
        return ! (Auth::user()->isAdmin() or Auth::user()->isDirge());
    }
}
