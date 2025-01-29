@extends('index')
@section('conteudo')

<h1>Cadastro Cargos</h1>

<form action="/treinamentos/salvar" method="post">
    @csrf
    Nome<input type="text" class="form-control" name="nome" placeholder="nome" value="{{@$resultado->nome}}"> 
    <br><br>
    Data<input type="date" class="form-control" name="created_at">
    <select name="idCargo" id="idCargo">
        @foreach ($cargos as $carg)
            <option value="{{$carg->id}}">{{$carg->nome}}</option>
        @endforeach
    </select>
    <select name="validade_meses" id="validade_meses">
        <option value="1">1 Mes</option>
        <option value="2">2 Mes</option>
        <option value="3">3 Mes</option>
        <option value="4">4 Mes</option>
        <option value="5">5 Mes</option>
        <option value="6">6 Mes</option>
        <option value="7">7 Mes</option>
    </select>
    <input type="hidden" name="id" value="{{@$resultado->$created_at}}">
    <button type="submit" class="btn btn-primary">Submit</button>   
</form>

@endsection