@if(isset($options->model) && isset($options->type))

    @if(class_exists($options->model))

        @php $relationshipField = $row->field; @endphp

        @if($options->type == 'belongsTo')

            @if(isset($view) && ($view == 'browse' || $view == 'read'))

                @php
                    $relationshipData = (isset($data)) ? $data : $dataTypeContent;
                    $model = app($options->model);
                    if (method_exists($model, 'getRelationship')) {
                        $query = $model::getRelationship($relationshipData->{$options->column});
                    } else {
                        $query = $model::find($relationshipData->{$options->column});
                    }
                @endphp

                @if(isset($query))
                    <p>{{ $query->{$options->label} }}</p>
                @else
                    <p>No results</p>
                @endif

            @else

                <select class="form-control select2" name="{{ $options->column }}">
                    @php
                        $model = app($options->model);
                        $query = $model::all();
                    @endphp

                    @if($row->required === 0)
                        <option value="">{{__('voyager::generic.none')}}</option>
                    @endif

                    @foreach($query as $relationshipData)
                        <option value="{{ $relationshipData->{$options->key} }}" @if($dataTypeContent->{$options->column} == $relationshipData->{$options->key}){{ 'selected="selected"' }}@endif>{{ $relationshipData->{$options->label} }}</option>
                    @endforeach
                </select>

            @endif

        @elseif($options->type == 'hasOne')

            @php

                $relationshipData = (isset($data)) ? $data : $dataTypeContent;

                $model = app($options->model);
                $query = $model::where($options->column, '=', $relationshipData->id)->first();

            @endphp

            @if(isset($query))
                <p>{{ $query->{$options->label} }}</p>
            @else
                <p>None results</p>
            @endif

        @elseif($options->type == 'hasMany')

            @if(isset($view) && ($view == 'browse' || $view == 'read'))

                @php
                    $relationshipData = (isset($data)) ? $data : $dataTypeContent;
                    $model = app($options->model);
            		$selected_values = $model::where($options->column, '=', $relationshipData->id)->get()->map(function ($item, $key) use ($options) {
            			return $item->{$options->label};
            		})->all();
                @endphp

                @if($view == 'browse')
                    @php
                        $string_values = implode(", ", $selected_values);
                        if(strlen($string_values) > 25){ $string_values = substr($string_values, 0, 25) . '...'; }
                    @endphp
                    @if(empty($selected_values))
                        <p>No results</p>
                    @else
                        <p>{{ $string_values }}</p>
                    @endif
                @else
                    @if(empty($selected_values))
                        <p>No results</p>
                    @else
                        <ul>
                            @foreach($selected_values as $selected_value)
                                <li>{{ $selected_value }}</li>
                            @endforeach
                        </ul>
                    @endif
                @endif

            @else

                @php
                    $model = app($options->model);
                    $query = $model::where($options->column, '=', $dataTypeContent->id)->get();
                @endphp

                @if(isset($query))
                    <ul>
                        @foreach($query as $query_res)
                            <li>{{ $query_res->{$options->label} }}</li>
                        @endforeach
                    </ul>

                @else
                    <p>No results</p>
                @endif

            @endif

        @elseif($options->type == 'belongsToMany')

            @if(isset($view) && ($view == 'browse' || $view == 'read'))

				@php
					$relationshipData = (isset($data)) ? $data : $dataTypeContent;
					if (property_exists($relationshipData, 'pessoas')) {
						$selected_values = $relationshipData->pessoas;
					}else if (property_exists($relationshipData, 'portarias')) {
						$selected_values = $relationshipData->portarias;
					}else{
						$selected_values = isset($relationshipData) ? $relationshipData->belongsToMany($options->model, $options->pivot_table)->get()->map(function ($item, $key) use ($options) {
							return $item;
						})->all() : array();
					}
                @endphp

                @if($view == 'browse')
					@php
                        $string_values = implode(", ", $selected_values);
                        // if(strlen($string_values) > 25){ $string_values = substr($string_values, 0, 25) . '...'; }
                    @endphp
                    @if(empty($selected_values))
                        <p>No results</p>
					@else
					<ul>
						@foreach($selected_values as $selected_value)
							<li>{{ $selected_value }}</li>
						@endforeach
					</ul>
                        {{-- <p>{{ $string_values }}</p> --}}
                    @endif
				@else
				{{-- {{ dd($selected_values) }} --}}
                    @if(empty($selected_values))
                        <p>No results</p>
                    @else
                        <div>
						@php
							$count = 1;
						@endphp
						@foreach($selected_values as $selected_value)
							@if ($dataType->slug == 'portarias')
							@if ($count == 1)
								<div class="row">
							@endif
								<div class="form-group col-md-3">
									<div class="row">
										<i class="voyager-person"></i> <a href="{{ route('voyager.pessoas.show', $selected_value->id) }}">{{ $selected_value->nome }}</a>
									</div>
									<div class="row">
										<strong>Data relatório:</strong> 
										{{ 
											isset($selected_value->pivot->data_relatorio) ? 
												date('d/m/Y', strtotime($selected_value->pivot->data_relatorio)) :
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
							@if ($count == 4)
								</div>
								@php
								$count = 0;
								@endphp
							@endif
							@elseif($dataType->slug == 'pessoas')
							@if ($count == 1)
								<div class="row">
							@endif
								<div class="form-group col-md-4">
									<div class="row">
										<i class="voyager-file-text"></i>
										<a href="{{ route('voyager.portarias.show', $selected_value->id) }}">
											{{ $selected_value->port_num }} - {{ $selected_value->descricao }}
										</a>
									</div>
									<div class="row">
										<strong>Data relatório:</strong> 
										{{ 
											isset($selected_value->pivot->data_relatorio) ? 
												date('d/m/Y', strtotime($selected_value->pivot->data_relatorio)) :
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
							@if ($count == 3)
								</div>
								@php
									$count = 0;
								@endphp
							@endif
							@else
								<li>{{ $selected_value }}</li>
							@endif
							@php
								$count ++;
							@endphp
						@endforeach
						</div>
                    @endif
                @endif

			@else
				<div class="form-group">
					@php
						$selected_values = isset($dataTypeContent) ? $dataTypeContent->belongsToMany($options->model, $options->pivot_table)->get()->map(function ($item, $key) use ($options) {
							return $item->{$options->key};
						})->all() : array();
						$relationshipOptions = app($options->model)->all();
						$pessoasSelecionadas = \App\Portaria::where('id', $dataTypeContent->id)->first();
					@endphp
					<select @if ($dataType->slug == "portarias") id="membros" @endif
						class="form-control @if(isset($options->taggable) && $options->taggable == 'on') select2-taggable @else select2 @endif"
						name="{{ $relationshipField }}[]" multiple
						@if(isset($options->taggable) && $options->taggable == 'on')
							data-route="{{ route('voyager.'.str_slug($options->table).'.store') }}"
							data-label="{{$options->label}}"
							data-error-message="{{__('voyager::bread.error_tagging')}}"
						@endif
					>

							@if($row->required === 0)
								<option value="">{{__('voyager::generic.none')}}</option>
							@endif

							@if ($dataType->slug == 'portarias')
							@foreach ($relationshipOptions as $relationshipOption)
								<option value="{{ $relationshipOption->id }}" @if(in_array($relationshipOption->id, $selected_values)){{ 'selected="selected"' }}@endif>
									{{ $relationshipOption->nome }}
								</option>
							@endforeach
							@else
							@foreach($relationshipOptions as $relationshipOption)
								<option value="{{ $relationshipOption->{$options->key} }}" @if(in_array($relationshipOption->{$options->key}, $selected_values)){{ 'selected="selected"' }}@endif>{{ $relationshipOption->{$options->label} }}</option>
							@endforeach
							@endif

					</select>
				</div>
				@if ($dataType->slug == "portarias")
				<div class="form-group">
					<p>Informações adicionais:</p>
					<div id="info_adicionais">
					@isset($pessoasSelecionadas)
					@foreach ($pessoasSelecionadas->pessoas as $pessoasSelecionada)
						<div class="form-group">
							<div class="col-md-12">
								<p><strong>{{ $pessoasSelecionada->nome }}</strong></p>
							</div>
							<div class="col-md-4 form-group">
								<label>Data para entregar relatório:</label>
								<input id="dt_rel_{{$pessoasSelecionada->id}}" type="date" name="data_relatorio[]"
										class="form-control dt_relatorio" value="{{ $pessoasSelecionada->pivot->data_relatorio }}">
							</div>
							<div class="col-md-4 form-group">
								<label>Entregou o relatório?</label>
								<input id="en_rel_{{$pessoasSelecionada->id}}" type="text" name="entregou_relatorio[]" 
										class="form-control ent_relatorio" value="{{ $pessoasSelecionada->pivot->entregou_relatorio }}">
							</div>
							<div class="col-md-4 form-group">
								<label>Declaração emitida?</label>
								<input id="declaracao_{{$pessoasSelecionada->id}}" type="text" name="declaracao[]"
										class="form-control declaracao" value="{{ $pessoasSelecionada->pivot->declaracao }}">
							</div>
							<hr>
						</div>
					@endforeach
					@endisset
					</div>
				</div>
				@endif
            @endif

        @endif

    @else

        cannot make relationship because {{ $options->model }} does not exist.

    @endif

@endif
@if ($dataType->slug == "portarias")
@section('javascript')
    <script>
        $('document').ready(function () {
            
            //Capturar quantidades por item
            $('#membros').on('change', function(){
                var inputDataRelatorio = {};
                var inputEntregouRelatorio = {};
                var inputDeclaracao = {};
                if ($('#info_adicionais').children().length > 0) {
                    inputDataRelatorio = $(".dt_relatorio");
                    inputEntregouRelatorio = $(".ent_relatorio");
                    inputDeclaracao = $(".declaracao");
					$('#info_adicionais').children().remove();
                }
                $('#membros option:selected').each(function(){
                    $('#info_adicionais').append(
						'<div class="col-md-12">' +
							'<p><strong>' + $(this).text() + '</strong></p>' +
						'</div>' +
						'<div class="col-md-4 form-group">' +
							'<label>Data para entregar relatório:</label>' +
							'<input id="dt_rel_'+$(this).val()+'" type="date" name="data_relatorio[]" class="form-control dt_relatorio">' +
						'</div>' +
						'<div class="col-md-4 form-group">' +
							'<label>Entregou o relatório?</label>' +
							'<input id="en_rel_'+$(this).val()+'" type="text" name="entregou_relatorio[]" class="form-control ent_relatorio">' +
						'</div>' +
						'<div class="col-md-4 form-group">' +
							'<label>Declaração emitida?</label>' +
							'<input id="declaracao_'+$(this).val()+'" type="text" name="declaracao[]" class="form-control declaracao">' +
						'</div>' +
						'<hr>'
                    );
                });
                if (!$.isEmptyObject(inputDataRelatorio)) {
                    inputDataRelatorio.each(function(){
                        if ($('#' + $(this).attr('id'))) {
                            $('#' + $(this).attr('id')).val($(this).val());
                        }
                    });
				}
				if (!$.isEmptyObject(inputEntregouRelatorio)) {
                    inputEntregouRelatorio.each(function(){
                        if ($('#' + $(this).attr('id'))) {
                            $('#' + $(this).attr('id')).val($(this).val());
                        }
                    });
				}
				if (!$.isEmptyObject(inputDeclaracao)) {
                    inputDeclaracao.each(function(){
                        if ($('#' + $(this).attr('id'))) {
                            $('#' + $(this).attr('id')).val($(this).val());
                        }
                    });
                }
            });
        });
    </script>
@stop
@endif