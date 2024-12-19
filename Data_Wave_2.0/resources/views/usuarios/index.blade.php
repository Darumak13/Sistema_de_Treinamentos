@extends('index')

@section('conteudo')

<h1>Lista de Usuários</h1>
<table class="table">
<tr class="col">
<th class="row">Nome</th>
<th>Email</th>
<th>Permissao</th>
<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($usuario as $usuarios)
<tr>
<td>{{ $usuarios->nome }}</td> 
<td>{{ $usuarios->email }}</td>  
<td>{{ $usuarios->permissao}}</td>
<td><a href="/usuarios/cadastro/{{ $usuarios->id }}">Editar</a></td>
<td><a href="/usuarios/remover/{{ $usuarios->id }}">Remover</a></td>
</tr>
@endforeach
</table>

@endsection