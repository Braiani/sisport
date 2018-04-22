<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Portaria;

class Portarias extends AbstractWidget
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
        $count = Portaria::count();

        if ($count <= 1) {
            $titulo = __('sisport.widgets.portarias.titulo-singular');
            $texto = trans_choice('sisport.widgets.portarias.texto-singular', $count);
        }else{
            $titulo = __('sisport.widgets.portarias.titulo-plural');
            $texto = trans_choice('sisport.widgets.portarias.texto-plural', $count);
        }

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$titulo}",
            'text'   => $texto,
            'button' => [
                'text' => 'Visualizar todas as portarias',
                'link' => route('voyager.portarias.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }
}
