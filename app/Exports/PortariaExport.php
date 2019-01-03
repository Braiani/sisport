<?php

namespace App\Exports;

use App\Portaria;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class PortariaExport implements WithMultipleSheets
{
    use Exportable;
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function sheets(): array
    {
        $sheets = [];
        
        array_push($sheets, new PessoaPortariaExport('Portaria'));
        array_push($sheets, new PessoaPortariaExport('Pessoa'));
        
        return $sheets;
    }
}
