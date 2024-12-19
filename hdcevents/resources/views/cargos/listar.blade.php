@extends('index')
@section('conteudo')
<h1>Lista de cargos</h1>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Remover</th>
        <th>Update</th>
    </tr>
    @foreach ($cargos as $cargo)
    <tr>
        <td>{{$cargo->nome}}</td>
        <td><a href="/cargos/remover/{{$cargo->id}}">Remover</a></td>
        <td><a href="/cargos/cadastro/{{$cargo->id}}">Update</a></td>
    </tr>
    @endforeach

    <button><a href="cargos/cadastro">Cadastrar</a></button>
    <button><a href="/">Home</a></button>
    @endsection