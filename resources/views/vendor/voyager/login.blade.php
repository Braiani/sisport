@extends('layouts.login.master')

@section('content')
    <p>{{ __('voyager::login.signin_below') }}</p>

    <form action="{{ route('voyager.login') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group form-group-default" id="emailGroup">
            <label>{{ __('voyager::generic.email') }}</label>
            <div class="controls">
                <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" class="form-control" required>
                {{-- <input type="hidden" name="siape"> --}}
            </div>
        </div>

        <div class="form-group form-group-default" id="passwordGroup">
            <label>{{ __('voyager::generic.password') }}</label>
            <div class="controls">
                <input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" class="form-control" required>
            </div>
        </div>

        <p>
            <a class="cm-link" href="{{ route('password.request') }}">Esqueceu sua senha?</a>
        </p>

        <button type="submit" class="btn btn-block login-button">
            <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('voyager::login.loggingin') }}...</span>
            <span class="signin">{{ __('voyager::generic.login') }}</span>
        </button>

    </form>
@endsection
