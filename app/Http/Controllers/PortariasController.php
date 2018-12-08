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
                    ->orWhereIn('status_id', function ($query) use ($search) {
                        $query->select('id')->from('status')->where('descricao', 'LIKE', "%{$search}%");
                    });
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
}
