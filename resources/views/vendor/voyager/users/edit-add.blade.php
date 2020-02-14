@extends('voyager::master')

@section('page_title', __('voyager::generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form"
              action="@if(!is_null($dataTypeContent->getKey())){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif"
              method="POST" enctype="multipart/form-data" autocomplete="off">
            <!-- PUT Method if we are editing -->
            @if(isset($dataTypeContent->id))
                {{ method_field("PUT") }}
            @endif
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-bordered">
                    {{-- <div class="panel"> --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="panel-body">
                            @if(!isset($dataTypeContent->id))
                            <div class="form-group">
                                <label for="person">Pessoas</label>
                                <select id="person" name="person" class="form-control select2"></select>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="name">{{ __('voyager::generic.name') }}</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('voyager::generic.name') }}"
                                       value="{{ old('name', $dataTypeContent->name ?? '') }}">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">{{ __('voyager::generic.email') }}</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('voyager::generic.email') }}"
                                               value="{{ old('email', $dataTypeContent->email ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="siape">SIAPE</label>
                                        <input type="text" class="form-control" id="siape" name="siape" placeholder="SIAPE"
                                               value="{{ old('siape', $dataTypeContent->siape ?? '') }}">
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">{{ __('voyager::generic.password') }}</label>
                                            @if(isset($dataTypeContent->password))
                                                <br>
                                                <small>{{ __('voyager::profile.password_hint') }}</small>
                                            @endif
                                            <input type="password" class="form-control" id="password" name="password" value="" autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alter_pass">Solicitar alteraçao da senha?</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="alter_pass" class="toggleswitch form-control"
                                                   data-on="Sim" checked data-off="Nao">
                                        </div>
                                    </div>
                                </div>

                            @can('editRoles', $dataTypeContent)
                                <div class="form-group">
                                    <label for="default_role">{{ __('voyager::profile.role_default') }}</label>
                                    @php
                                        $dataTypeRows = $dataType->{(isset($dataTypeContent->id) ? 'editRows' : 'addRows' )};

                                        $row     = $dataTypeRows->where('field', 'user_belongsto_role_relationship')->first();
                                        $options = $row->details;
                                    @endphp
                                    @include('voyager::formfields.relationship')
                                </div>
                                <div class="form-group">
                                    <label for="additional_roles">{{ __('voyager::profile.roles_additional') }}</label>
                                    @php
                                        $row     = $dataTypeRows->where('field', 'user_belongstomany_role_relationship')->first();
                                        $options = $row->details;
                                    @endphp
                                    @include('voyager::formfields.relationship')
                                </div>
                            @endcan
                            @php
                            if (isset($dataTypeContent->locale)) {
                                $selected_locale = $dataTypeContent->locale;
                            } else {
                                $selected_locale = config('app.locale', 'en');
                            }

                            @endphp
                            <div class="form-group">
                                <label for="locale">{{ __('voyager::generic.locale') }}</label>
                                <select class="form-control select2" id="locale" name="locale">
                                    @foreach (Voyager::getLocales() as $locale)
                                    <option value="{{ $locale }}"
                                    {{ ($locale == $selected_locale ? 'selected' : '') }}>{{ $locale }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel panel-bordered panel-warning">
                        <div class="panel-body">
                            <div class="form-group">
                                @if(isset($dataTypeContent->avatar))
                                    <img src="{{ filter_var($dataTypeContent->avatar, FILTER_VALIDATE_URL) ? $dataTypeContent->avatar : Voyager::image( $dataTypeContent->avatar ) }}" style="width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;" />
                                @endif
                                <input type="file" data-name="avatar" name="avatar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary pull-right save">
                {{ __('voyager::generic.save') }}
            </button>
        </form>

        <iframe id="form_target" name="form_target" style="display:none"></iframe>
        <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
            {{ csrf_field() }}
            <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
            <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
        </form>
    </div>
@stop

@section('javascript')
{{--    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>--}}
    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();
            @if(!isset($dataTypeContent->id))
            $('#person').select2({
                placeholder:'Vincular usuario a alguma pessoa cadastrada...',
                ajax: {
                    url: '{{ route('search.people.api') }}',
                    delay: 250,
                    dataType: 'json',
                    type: 'POST',
                    processResults: function (data) {
                        return {
                            results: $.map(data.results, function (item) {
                                return {
                                    text: "Nome: " + item.nome + " - SIAPE: " + (item.siape == null ? 'Sem SIAPE' : item.siape),
                                    id: item.id,
                                }
                            })
                        };
                    }
                }
            });

            $('#person').on('change', function(){
                $('#voyager-loader').fadeIn();
                var personId = $(this).val();
                $.ajax({
                    url: "{{ route('search.person.api', '__id') }}".replace('__id', personId),
                    dataType: 'json',
                    type: 'POST',
                }).done(function (response) {
                    verifyUser(response);
                    updateUser(response);
                });
            });

            function verifyUser(data) {
                console.log('Data: ', data);
                if (data.usuario !== null){
                    window.location.href = "{{ route('voyager.users.edit', '__id') }}".replace('__id', data.usuario.id);
                }
            }
            function updateUser(data) {
                $("#name").val(data.nome);
                $("#email").val(data.email ?? '');
                $("#siape").val(data.siape ?? '');
                $("#password").val(data.siape ?? '');
                $("select[name='role_id'] option:contains({{config("voyager.user.default_role")}})").attr('selected', 'selected');
                $("select[name='role_id']").trigger('change');
                $('#voyager-loader').fadeOut();
            }
            @endif
        });
    </script>
@stop
