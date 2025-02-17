

<h1>Cadastro Cargos</h1>

<form action="/cargos/cadastrar" method="post">
    @csrf
    Cargo:<input type="text" name="nome" value="{{$resultado ? $resultado->nome : ''}}"><br><br>

    <input type="hidden" name="id" value="{{$resultado ? $resultado->id : ''}}">
    <input type="submit" value="Salvar"><br>
</form>
<a href="/cargos">Voltar</a>

