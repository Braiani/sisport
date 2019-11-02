@extends('layouts.login.master')

@section('content')
    <p>{{ __('Recuperar Senha') }}</p>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group form-group-default" id="emailGroup">
                <label>{{ __('voyager::generic.email') }}</label>
                <div class="controls">
                    <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" class="form-control" required>
                </div>
            </div>

            <div class="form-group row mb-0 mt-3">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Enviar link de recuperação') }}
                    </button>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('voyager.login') }}" class="btn btn-warning btn-block">{{ __('Voltar para tela de login') }}</a>
                </div>
            </div>
        </form>
    </div>
@endsection
