@extends('layouts.login.master')

@section('content')
    <p>Faça seu login</p>

    <form action="{{ route('voyager.login') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group form-group-default" id="emailGroup">
            <label>E-mail ou SIAPE</label>
            <div class="controls">
                <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="E-mail ou SIAPE" class="form-control" required>
                {{-- <input type="hidden" name="siape"> --}}
            </div>
        </div>

        <div class="form-group form-group-default" id="passwordGroup">
            <label>Senha</label>
            <div class="controls">
                <input type="password" name="password" placeholder="Senha" class="form-control" required>
            </div>
        </div>

        <p>
            <a class="cm-link" href="{{ route('password.request') }}">Esqueceu sua senha?</a>
        </p>

        <button type="submit" class="btn btn-block login-button">
            <span class="signingin hidden"><span class="voyager-refresh"></span> Entrando...</span>
            <span class="signin">Entrar</span>
        </button>

    </form>
@endsection
