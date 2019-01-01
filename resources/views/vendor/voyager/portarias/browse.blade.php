@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->display_name_plural)

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="{{ $dataType->icon }}"></i> {{ $dataType->display_name_plural }}
        </h1>
        @can('add',app($dataType->model_name))
            <a href="{{ route('voyager.'.$dataType->slug.'.create') }}" class="btn btn-success btn-add-new">
                <i class="voyager-plus"></i> <span>{{ __('voyager::generic.add_new') }}</span>
            </a>
        @endcan
        @can('delete',app($dataType->model_name))
            @include('voyager::partials.bulk-delete')
        @endcan
        @can('edit',app($dataType->model_name))
        @if(isset($dataType->order_column) && isset($dataType->order_display_column))
            <a href="{{ route('voyager.'.$dataType->slug.'.order') }}" class="btn btn-primary">
                <i class="voyager-list"></i> <span>{{ __('voyager::bread.order') }}</span>
            </a>
        @endif
        @endcan
        {{-- @can('add',app($dataType->model_name))
            <a href="{{ route('portarias.download') }}" class="btn btn-info btn-add-new">
                <i class="voyager-download"></i> <span>{{ __('sisport.download') }}</span>
            </a>
        @endcan --}}
        @include('voyager::multilingual.language-selector')
    </div>
@stop

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<style>
	.edit{
		margin: 2px;
	}
	.remove{
		margin: 2px;
	}
</style>
@endsection

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
				<div class="col-md-12">
					<div class="panel panel-bordered">
						<div class="panel-body">
							<div class="toolbar">
								<!--        Here you can write extra buttons/actions for the toolbar              -->
							</div>
							<div class="table-responsive">
							<table id="table-bootstrap"
								class="table table-hover"
								data-url="{{ route('voyager.portarias.getData') }}"
								data-side-pagination="server"
								data-locale="pt-BR">
								<thead>
									<tr>
										{{-- <th data-field="state" data-checkbox="true"></th> --}}
										<th data-field="port_num"
											data-sortable="true"
											>Port. nº</th>
										<th data-field="descricao"
											data-sortable="true"
											>Descrição</th>
										<th data-field="data_emissao"
											data-align="center"
											data-formatter="dateFormat"
											data-sortable="true"
											>Data publicação</th>
										<th data-field="publicacao"
											data-align="center"
											data-sortable="true"
											>Publicação</th>
										<th data-field="vencimento"
											data-align="center"
											data-formatter="dateFormat"
											data-sortable="true"
											>Vencimento</th>
										<th 
											data-field="status"
											data-formatter="statusFormatter"
											data-sortable="true"
											>Status</th>
										<th data-field="pessoas" data-formatter="membrosFormatter">Membros</th>
										<th data-field="observacao">Observação</th>
										<th data-field="restrito" data-formatter="restritoFormatter">Restrito?</th>
										<th data-field="arquivo" data-formatter="linkFormatter">Arquivo</th>
										@can('read',app($dataType->model_name))
										<th data-formatter="viewFormatter">Visualizar</th>
										@endcan
										@can('add',app($dataType->model_name))
											<th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Ações</th>
										@endcan
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@can('delete',app($dataType->model_name))
	{{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->display_name_singular) }}?</h4>
				</div>
				<div class="modal-footer">
					<form action="#" id="delete_form" method="POST">
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<input type="submit" class="btn btn-danger pull-right delete-confirm" value="{{ __('voyager::generic.delete_confirm') }}">
					</form>
					<button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	@endcan
@stop

@section('javascript')
<script src="{{asset('/js/plugins/bootstrap-table.js')}}"></script>
<script src="{{asset('/js/locale/bootstrap-table-pt-BR.js')}}"></script>
<script>
	var $baseUrl = "{{ route('voyager.portarias.index') }}";
	@can('delete',app($dataType->model_name))
	var $formActionUrl = '{{ route('voyager.'.$dataType->slug.'.destroy', ['id' => '__id']) }}';
	@endcan
	var $baseStorageUrl = "{{ Storage::disk(config('voyager.storage.disk'))->url('__file') }}";
</script>
<script src="{{asset('/js/portarias-js.js')}}"></script>
@stop
