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
        $string = trans_choice('voyager.dimmer.post', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} Portarias cadastradas",
            'text'   => "Existem {$count} portarias cadastradas. Clique no botão abaixo para visualizar todas.",
            'button' => [
                'text' => 'Visualizar todas as portarias',
                'link' => route('voyager.portarias.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }
}
