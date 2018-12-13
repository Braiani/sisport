<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>Portaria nº {{ $portaria->port_num }} - {{ $portaria->descricao }}</title>
</head>
<body>
	<img src="{{ asset('img/email-head.png') }}" width="420" height="61"><br>
	<p>Prezados,</p>
	<p>Informamos que a Portaria nº {{ $portaria->port_num }} - {{ $portaria->descricao }} foi encaminhada para publicação.</p>
	
	<p><u><b>Importante:</b>  Fiquem atentos aos prazos de atividades, elaboração de plano de trabalho, relatórios e validade da portaria.</u></p>
	
	<p>
		Informamos que os modelos de relatórios encontram-se no suap e deverão ser encaminhados à Dirge pelo  Presidente/Coordenador
		da Comissão por meio do <b>Processo eletrônico que consta na referida Portaria.</b> Neste processo eletrônico, deverá constar o relatório do  
		Presidente/Coordenador , bem como os relatórios individuais dos demais membros.
	</p>
	
	<p>Para acessar o modelo de relatório, acesse o <u>SUAP > ADMINISTRAÇÃO > Documentos Eletrônicos > Documentos > Adicionar Documento de Texto</u></p>
	<p>Tipo de Documento: <b>Relatório.</b></p>
	<p>Modelo de Documento:  <b>Relatório Final das Atividades Desenvolvidas pela Comissão (preenchido pelo Presidente/Coordenador)</b></p>
	<p>Modelo de Documento:  <b>Relatório Individual de Atividades Desenvolvidas em Comissão (preenchido pelos demais membros).</b></p>
	
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
			<a href="http://www.ifms.edu.br/" target="_blank" >Site</a> •
			<a href="http://facebook.com/ifms.cg" target="_blank" >Facebook</a> •
			<a href="http://youtube.com/ifmscomunica" target="_blank">Youtube</a>
		</p>
	</div>
</body>
</html>