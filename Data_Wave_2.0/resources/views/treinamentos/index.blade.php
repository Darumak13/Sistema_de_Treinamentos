
<h1>Lista de Treinamentos</h1>
<table class="table">
<tr class="col">
<th class="row">Nome</th>
<th>Cargo</th>
<th>Data Criada</th>
<th>Validade</th>
<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($treinamentos as $treinamento)
<tr>
<td>{{ $treinamento->nome }}</td> 
<td>{{ $treinamento->cargos->nome}}</td>
<td>{{ $treinamento->created_at }}</td>  
<td>{{ $treinamento->validade_meses}}</td>
<td><a href="/treinamentos/cadastro/{{ $treinamento->id }}">Editar</a></td>
<td><a href="/treinamentos/remover/{{ $treinamento->id }}">Remover</a></td>
</tr>
@endforeach
</table>

