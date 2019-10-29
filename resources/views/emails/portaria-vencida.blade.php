<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Portaria nº {{ $portaria->port_num }} - {{ $portaria->descricao }}</title>
</head>
<body>
<img src="{{ $message->embed(public_path() . '/img/email-head.png') }}" width="420" height="61"><br>
<p>Prezado Servidor,</p>
<p>Com intuito de facilitar seu controle sobre as participações em nossas comissões, informamos que a Portaria nº {{ $portaria->port_num }} - {{ $portaria->descricao }}
    encontra-se <b>VENCIDA</b>.</p>

<p>Lembramos que, caso ainda não tenha enviado seu relatório, é importante que encaminhe para o Presidente/Coordenador da comissão e/ou para a Direção Geral de nosso campus.</p>

<p>Na hipótese de já ter enviado, agradecemos a colaboração e pedimos que desconsidere este lembrete.</p>

<p>As declarações, de efetiva participação em comissões, serão emitidas após análise dos relatórios e contribuirão pontuando em diversos editais institucionais.</p>

<p><u>Essa é uma mensagem automática.</u></p>

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
