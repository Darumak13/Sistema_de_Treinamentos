@extends('index')

@section('conteudo')

<h1>Lista de Colaboradores</h1>
<table class="table">
<tr class="col">
<th class="row">Permissão</th>
<th>Nome</th>
<th>Email</th>
<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($colaborador as $colaboradores)
<tr>
<td>{{ $colaboradores->permissao }}</td> 
<td>{{ $colaboradores->nome}}</td>
<td>{{ $colaboradores->email }}</td>  
<td><a href="/colaboradores/cadastro/{{ $colaboradores->id }}">Editar</a></td>
<td><a href="/colaboradores/remover/{{ $colaboradores->id }}">Remover</a></td>
</tr>
@endforeach
</table>

@endsection