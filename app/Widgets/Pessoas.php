<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Pessoa;

class Pessoas extends AbstractWidget
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
        $count = Pessoa::count();

        if ($count <= 1) {
            $titulo = __('sisport.widgets.pessoas.titulo-singular');
            $texto = trans_choice('sisport.widgets.pessoas.texto-singular', $count);
        }else{
            $titulo = __('sisport.widgets.pessoas.titulo-plural');
            $texto = trans_choice('sisport.widgets.pessoas.texto-plural', $count);
        }

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-group',
            'title'  => "{$count} {$titulo}",
            'text'   => $texto,
            'button' => [
                'text' => 'Ver todos as pessoas',
                'link' => route('voyager.pessoas.index'),
            ],
            'image' => 'pessoas.jpg',
        ]));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}
