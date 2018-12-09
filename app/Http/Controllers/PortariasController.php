<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portaria;

class PortariasController extends Controller
{
    public function get_data(Request $request)
    {
        $offset = $request->get('offset');
        $limit = $request->get('limit');
        $search = $request->get('search') ? $request->get('search') : false;
        $sort = $request->get('sort') ? $request->get('sort') : false;
        
        if ($sort == 'status') {
            $sort = 'status_id';
        }

        $query = new Portaria();

        if ($search) {
            $query = $query->where('descricao', 'LIKE', "%{$search}%")
                    ->orWhere('port_num', 'LIKE', "%{$search}%")
                    ->orWhere('publicacao', 'LIKE', "%{$search}%")
                    ->orWhereIn('status_id', function ($query) use ($search) {
                        $query->select('id')->from('status')->where('descricao', 'LIKE', "%{$search}%");
                    })->orWhereHas('pessoas', function ($query) use ($search) {
                        $query->where('nome', 'LIKE', "%{$search}%")
                                ->orWhereIn('coordenacoes_id', function ($q) use ($search) {
                                    $q->select('id')->from('coordenacoes')
                                        ->orWhere('sigla', 'LIKE', "%{$search}%")
                                        ->orWhere('nome', 'LIKE', "%{$search}%");
                                });
                    });
        }
        if ($this->verificaData($search)) {
            $data = $this->dateBR($search);
            $query = $query->orWhere('data_emissao', $data)
                    ->orWhere('vencimento', $data);
        }
        if ($sort) {
            $query = $query->orderBy($sort, $request->get('order'));
        }

        $total = $query->count();

        $portaria = $query->offset($offset)->limit($limit)->orderBy('id', 'DESC')->with(['pessoas','status'])->get();

        $resposta = array(
            'total' => $total,
            'count' => $portaria->count(),
            'rows' => $portaria,
        );
        return $resposta;
    }

    public function verificaData($value)
    {
        return preg_match('/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/', $value);
    }
    
    public function dateBR($value)
    {
        $data = str_replace("/", "-", $value);
        return date('Y-m-d', strtotime($data));
    }
}
