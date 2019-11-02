@extends('layouts.login.master')

@section('content')
    <p>{{ __('Resetar Senha') }}</p>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group form-group-default" id="emailGroup">
            <label>{{ __('voyager::generic.email') }}</label>
            <div class="controls">
                <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required>
            </div>
        </div>

        <div class="form-group form-group-default" id="passwordGroup">
            <label>{{ __('voyager::generic.password') }}</label>
            <div class="controls">
                <input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" class="form-control" required>
            </div>
        </div>

        <div class="form-group form-group-default" id="passwordGroup">
            <label>{{ __('Confirmar senha') }}</label>
            <div class="controls">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </div>
    </form>
@endsection
