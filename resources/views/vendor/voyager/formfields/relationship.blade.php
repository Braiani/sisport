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
                <select
                    class="form-control @if(isset($options->taggable) && $options->taggable == 'on') select2-taggable @else select2 @endif"
                    name="{{ $relationshipField }}[]" multiple
                    @if(isset($options->taggable) && $options->taggable == 'on')
                        data-route="{{ route('voyager.'.str_slug($options->table).'.store') }}"
                        data-label="{{$options->label}}"
                        data-error-message="{{__('voyager::bread.error_tagging')}}"
                    @endif
                >

                        @php
                            $selected_values = isset($dataTypeContent) ? $dataTypeContent->belongsToMany($options->model, $options->pivot_table)->get()->map(function ($item, $key) use ($options) {
                                return $item->{$options->key};
                            })->all() : array();
                            $relationshipOptions = app($options->model)->all();
                        @endphp

                        @if($row->required === 0)
                            <option value="">{{__('voyager::generic.none')}}</option>
                        @endif

                        @foreach($relationshipOptions as $relationshipOption)
                            <option value="{{ $relationshipOption->{$options->key} }}" @if(in_array($relationshipOption->{$options->key}, $selected_values)){{ 'selected="selected"' }}@endif>{{ $relationshipOption->{$options->label} }}</option>
                        @endforeach

                </select>

            @endif

        @endif

    @else

        cannot make relationship because {{ $options->model }} does not exist.

    @endif

@endif
