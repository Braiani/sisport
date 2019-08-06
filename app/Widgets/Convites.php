<?php

namespace App\Widgets;

use App\Convite;
use Arrilot\Widgets\AbstractWidget;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;

class Convites extends AbstractWidget
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
        $count = Convite::where('prazo', Carbon::today())->count();
        $opt = [];

        if ($count > 0) {
            $opt = [
                'key' => 'prazo',
                'filter' => 'equals',
                's' => urlencode(Carbon::today()->toDateString())
            ];
        }

        $link = route('voyager.convites.index', $opt);

        if ($count <= 1) {
            $titulo = __('sisport.widgets.convites.titulo-singular');
            $texto = trans_choice('sisport.widgets.convites.texto-singular', $count);
        } else {
            $titulo = __('sisport.widgets.convites.titulo-plural');
            $texto = trans_choice('sisport.widgets.convites.texto-plural', $count);
        }

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-mail',
            'title' => "{$count} {$titulo}",
            'text' => $texto,
            'button' => [
                'text' => 'Visualizar convites',
                'link' => $link,
            ],
            'image' => "https://source.unsplash.com/collection/" . Voyager::setting('admin.bg_image', '2128442') . "/1920x1080/",
        ]));
    }

    public function shouldBeDisplayed()
    {
        return (Auth::user()->isAdmin() or Auth::user()->isDirge());
    }
}