@extends('index')
@section('conteudo')

<h1>Cadastro Cargos</h1>

<form action="/treinamentos/salvar" method="post">
    @csrf
    Nome<input type="text" class="form-control" name="nome" placeholder="nome" value="{{@$resultado->nome}}"> 
    <br><br>
    Data<input type="date" class="form-control" name="created_at">
    <input type="text" name="idCargo" id="idCargo" value="{{@$cargos->id}}">
    <label for="idCargo" id="idCargo">{{@$cargos->nome}}</label>
    <input type="hidden" name="id" value="{{@$resultado->$created_at}}">
    <button type="submit" class="btn btn-primary">Submit</button>   
</form>

@endsection