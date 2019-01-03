<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portaria;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Models\DataRow;
use App\Status;
use Illuminate\Support\Facades\Auth;
use App\Exports\PortariaExport;

class PortariasController extends VoyagerBaseController
{
    public function show(Request $request, $id)
    {
        $portaria = Portaria::find($id);
        if (Auth::user()->can('visibilidade', $portaria)) {
            return parent::show($request, $id);
        } else {
            return redirect()
                ->route("voyager.portarias.index")
                ->with([
                        'message'    => "Você não tem permissão para acessar essa portaria!",
                        'alert-type' => 'error',
                    ]);
        }
    }
    
    public function insertUpdateData($request, $slug, $rows, $data)
    {
        if (!$request->filled('status_id')) {
            $rows = $this->defaultStatus($request, $rows);
        }
        
        $portaria = parent::insertUpdateData($request, $slug, $rows, $data);
        
        $sync_data = [];
        $pessoas = $request->portaria_belongstomany_pessoa_relationship;
        $dataRelatorio = $request->data_relatorio;
        $entregouRelatorio = $request->entregou_relatorio;
        $declaracao = $request->declaracao;

        foreach ($pessoas as $key => $pessoa) {
            $sync_data[$pessoa] = [
                'data_relatorio' => $dataRelatorio[$key],
                'entregou_relatorio' => $entregouRelatorio[$key],
                'declaracao' => $declaracao[$key]
            ];
        }
        
        $portaria->pessoas()->sync($sync_data);
        
        return $portaria;
    }
    
    public function defaultStatus($request, $rows)
    {
        $valorPadrao = Status::padraoCadastro()->first();
        $request->merge(['status_id' => $valorPadrao->id]);
        $statusDataRow = DataRow::where('data_type_id', $rows[0]->data_type_id)->where('field', 'status_id')->first();
        return $rows->push($statusDataRow);
    }
    
    public function download()
    {
        if (Auth::user()->can('add', new Portaria)) {
            return (new PortariaExport)->download('backup_'. date('d-m-Y_H_i') .'.xlsx');
        } else {
            return redirect()
                ->route("voyager.portarias.index")
                ->with([
                        'message'    => "Você não tem permissão para fazer o Download do arquivo!",
                        'alert-type' => 'error',
                    ]);
        }
    }

    public function get_data(Request $request)
    {
        $user = Auth::user();
        $offset = $request->get('offset');
        $limit = $request->get('limit');
        $search = $request->get('search') ? $request->get('search') : false;
        $sort = $request->get('sort') ? $request->get('sort') : false;
        
        if ($sort == 'status') {
            $sort = 'status_id';
        }

        $query = new Portaria();
        
        $restrito = ($user->isAdmin() or $user->isDirge());
        
        $restrito ?: $query = $query::restrito($restrito, $user);

        if ($search) {
            $query = $query->where(function ($query) use ($search) {
                $query->where('descricao', 'LIKE', "%{$search}%")
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
