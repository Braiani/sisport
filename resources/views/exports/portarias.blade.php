
@if (isset($portarias))
<table>
	<thead>
		<tr>
			<th>Port. nº</th>
			<th>Descrição</th>
			<th>Data publicação</th>
			<th>Publicação</th>
			<th>Vencimento</th>
			<th>status</th>
			<th>Observação</th>
			<th>Restrito?</th>
		</tr>
	</thead>
	<tbody>
	@foreach($portarias as $portaria)
		<tr>
			<td>{{ $portaria->port_num }}</td>
			<td>{{ $portaria->descricao }}</td>
			<td>{{ $portaria->data_emissao->format('d/m/Y') }}</td>
			<td>{{ $portaria->publicacao }}</td>
			<td>{{ $portaria->vencimento != null ? $portaria->vencimento->format('d/m/Y') : '' }}</td>
			<td>{{ $portaria->status->descricao }}</td>
			<td>{{ $portaria->observacao }}</td>
			<td>{{ $portaria->restrito ? 'Sim' : 'Não' }}</td>
		</tr>
	@endforeach
	</tbody>
</table>
@elseif(isset($pessoas))
<table>
	<thead>
		<tr>
			<th>Port. nº</th>
			<th>Descrição</th>
			<th>Membro</th>
			<th>Data do Relatório</th>
			<th>Entregou relatório?</th>
			<th>Declaração</th>
		</tr>
	</thead>
	<tbody>
	@foreach($pessoas as $key => $portaria)
	@foreach ($portaria->pessoas as $_key => $pessoa)
		<tr>
			<td>{{ $pessoas[$key]->port_num }}</td>
			<td>{{ $pessoas[$key]->descricao }}</td>
			<td>{{ $pessoa->nome }}</td>
			<td>{{ $pessoa->pivot->data_relatorio != null ? $pessoa->pivot->data_relatorio->format('d/m/Y') : '' }}</td>
			<td>{{ $pessoa->pivot->entregou_relatorio ? "Sim" : "Não" }}</td>
			<td>{{ $pessoa->pivot->declaracao }}</td>
		</tr>
	@endforeach
	@endforeach
	</tbody>
</table>
@endif