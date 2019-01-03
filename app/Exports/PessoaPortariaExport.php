<?php

namespace App\Exports;

use App\Portaria;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class PessoaPortariaExport implements FromView, ShouldAutoSize, WithTitle
{
    use Exportable;

    protected $metodo;
    
    public function __construct(string $metodo)
    {
        $this->metodo = $metodo;
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        if ($this->metodo == 'Portaria') {
            return view('exports.portarias', [
                'portarias' => Portaria::all()
            ]);
        } elseif ($this->metodo == 'Pessoa') {
            return view('exports.portarias', [
                'pessoas' => Portaria::has('pessoas')->with('pessoas')->get()
            ]);
        }
    }
    
    public function title(): string
    {
        $this->metodo == 'Portaria' ? $titulo = 'Portarias Total' : $titulo = 'Portarias Detalhadas';

        return $titulo;
    }
}
