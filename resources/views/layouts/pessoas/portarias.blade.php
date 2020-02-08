@section('css')
    <style>
        .voyager .settings .nav-tabs {
            background: none;
            border-bottom: 0px;
        }

        .voyager .settings .nav-tabs .active a {
            border: 0px;
        }


        .settings .select2 {
            margin-left: 10px;
        }

        .settings .select2-selection {
            height: 32px;
            padding: 2px;
        }

        .voyager .settings .nav-tabs > li {
            margin-bottom: -1px !important;
        }

        .voyager .settings .nav-tabs a {
            text-align: center;
            background: #f8f8f8;
            border: 1px solid #f1f1f1;
            position: relative;
            top: -1px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .voyager .settings .nav-tabs a i {
            display: block;
            font-size: 22px;
        }

        .tab-content {
            background: #ffffff;
            border: 1px solid transparent;
        }

        .tab-content > div {
            padding: 10px;
        }

        .settings .no-padding-left-right {
            padding-left: 0px;
            padding-right: 0px;
        }

        .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
            background: #fff !important;
            color: #62a8ea !important;
            border-bottom: 1px solid #fff !important;
            top: -1px !important;
        }

        .nav-tabs > li a {
            transition: all 0.3s ease;
        }


        .nav-tabs > li.active > a:focus {
            top: 0px !important;
        }

        .voyager .settings .nav-tabs > li > a:hover {
            background-color: #fff !important;
        }
        .flexRow {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
@stop

<div class="panel">
    <div class="page-content settings container-fluid">
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#all">Todas <span class="badge">{{$selected_values->count()}}</span></a>
            </li>
            <li>
                <a data-toggle="tab" href="#vigentes">Vigentes <span class="badge">{{$selected_values->where('status.padrao', 1)->count()}}</span></a>
            </li>
            <li>
                <a data-toggle="tab" href="#nao-vigentes">Não Vigentes <span class="badge">{{$selected_values->where('status.padrao', "<>", 1)->count()}}</span></a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="all" class="tab-pane fade in active">
                <div class="row flexRow">
                    @foreach($selected_values->sortByDesc('data_emissao') as $selected_value)
                        @can('visibilidade', $selected_value)
                            <div class="form-group col-md-4 @if($selected_value->status->padrao === 1) bg-success @endif">
                                <div class="row">
                                    <i class="voyager-file-text"></i>
                                    <a href="{{ route('voyager.portarias.show', $selected_value->id) }}">
                                        {{ $selected_value->port_num }}
                                        - {{ $selected_value->descricao }}
                                    </a>
                                </div>
                                <div class="row">
                                    <strong>Status da portaria:</strong>
                                    {{ $selected_value->status->descricao }}
                                </div>
                                <div class="row">
                                    <strong>Data relatório:</strong>
                                    {{
                                        isset($selected_value->pivot->data_relatorio) ?
                                            $selected_value->pivot->data_relatorio->format('d/m/Y') :
                                            "Sem informações"
                                    }}
                                </div>
                                <div class="row">
                                    <strong>Entregou relatório?</strong>
                                    {{ isset($selected_value->pivot->entregou_relatorio) ? $selected_value->pivot->entregou_relatorio : 'Sem informações' }}
                                </div>
                                <div class="row">
                                    <strong>Declaração emitida?</strong>
                                    {{ isset($selected_value->pivot->declaracao) ? $selected_value->pivot->declaracao : 'Sem informações' }}
                                </div>
                            </div>
                        @endcan
                    @endforeach
                </div>
            </div>
            <div id="vigentes" class="tab-pane fade in">
                <div class="row flexRow">
                    @foreach($selected_values->where('status_id', 1)->sortByDesc('data_emissao') as $selected_value)
                        @can('visibilidade', $selected_value)
                            <div class="form-group col-md-4">
                                <div class="row">
                                    <i class="voyager-file-text"></i>
                                    <a href="{{ route('voyager.portarias.show', $selected_value->id) }}">
                                        {{ $selected_value->port_num }}
                                        - {{ $selected_value->descricao }}
                                    </a>
                                </div>
                                <div class="row">
                                    <strong>Status da portaria:</strong>
                                    {{ $selected_value->status->descricao }}
                                </div>
                                <div class="row">
                                    <strong>Data relatório:</strong>
                                    {{
                                        isset($selected_value->pivot->data_relatorio) ?
                                            $selected_value->pivot->data_relatorio->format('d/m/Y') :
                                            "Sem informações"
                                    }}
                                </div>
                                <div class="row">
                                    <strong>Entregou relatório?</strong>
                                    {{ isset($selected_value->pivot->entregou_relatorio) ? $selected_value->pivot->entregou_relatorio : 'Sem informações' }}
                                </div>
                                <div class="row">
                                    <strong>Declaração emitida?</strong>
                                    {{ isset($selected_value->pivot->declaracao) ? $selected_value->pivot->declaracao : 'Sem informações' }}
                                </div>
                            </div>
                        @endcan
                    @endforeach
                </div>
            </div>
            <div id="nao-vigentes" class="tab-pane fade in">
                <div class="row flexRow">
                    @foreach($selected_values->where('status_id', "<>", 1)->sortByDesc('data_emissao') as $selected_value)
                        @can('visibilidade', $selected_value)
                            <div class="form-group col-md-4">
                                <div class="row">
                                    <i class="voyager-file-text"></i>
                                    <a href="{{ route('voyager.portarias.show', $selected_value->id) }}">
                                        {{ $selected_value->port_num }}
                                        - {{ $selected_value->descricao }}
                                    </a>
                                </div>
                                <div class="row">
                                    <strong>Status da portaria:</strong>
                                    {{ $selected_value->status->descricao }}
                                </div>
                                <div class="row">
                                    <strong>Data relatório:</strong>
                                    {{
                                        isset($selected_value->pivot->data_relatorio) ?
                                            $selected_value->pivot->data_relatorio->format('d/m/Y') :
                                            "Sem informações"
                                    }}
                                </div>
                                <div class="row">
                                    <strong>Entregou relatório?</strong>
                                    {{ isset($selected_value->pivot->entregou_relatorio) ? $selected_value->pivot->entregou_relatorio : 'Sem informações' }}
                                </div>
                                <div class="row">
                                    <strong>Declaração emitida?</strong>
                                    {{ isset($selected_value->pivot->declaracao) ? $selected_value->pivot->declaracao : 'Sem informações' }}
                                </div>
                            </div>
                        @endcan
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
