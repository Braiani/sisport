<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Recuperação de Senha</title>
</head>
<body>
<img src="{{ $message->embed(public_path() . '/img/email-head.png') }}" width="420" height="61"><br>
<p>Prezado(a) {{ $user->name }},</p>

<p>Você está recebendo esse e-mail por ter sido criado um usuario com esse e-mail no {{ setting("admin.title") }} - {{ setting("admin.description") }}.</p>

<p>Informamos abaixo suas informações de acesso:</p>

<p><u>Usuário:</u> {{ $user->siape }} <b>ou</b> {{ $user->email }}</p>
<p><u>Senha:</u> {{ $password }}</p>

<p>Para acessar o sistema, favor utilizar esse link: <a href="{{ route('voyager.dashboard') }}" target="_blank">{{ route('voyager.dashboard') }}</a></p>

<p><u>Essa é uma mensagem automática, favor nao responder.</u></p>

<p>At.te,</p>

<div style="color: #274e13; font-family: Verdana, sans-serif; font-size: small; margin-top:0px;line-height:5px">
    <p>
        {{ setting("admin.title") }} - {{ setting("admin.description") }}
    </p>
    <p>
        <b>Equipe Direção-geral do <i>Campus</i> Campo Grande</b>
    </p>
    <p>
        Rua Taquari nº 831, Santo Antônio, Campo Grande/MS 79100-510
    </p>
    <p>
        (67) 3357-8504 •
        <a href="http://www.ifms.edu.br/" target="_blank">Site</a> •
        <a href="http://facebook.com/ifms.cg" target="_blank">Facebook</a> •
        <a href="http://youtube.com/ifmscomunica" target="_blank">Youtube</a>
    </p>
</div>
</body>
</html>
