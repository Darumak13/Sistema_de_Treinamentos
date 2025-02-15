@section('conteudo')

<h1>Cadastro Colaboradores</h1>

<form action="/colaboradores/salvar" method="post">
    @csrf
    Email<input type="email" class="form-control" name="email" placeholder="nome" value="{{@$resultado->email}}"> 
    <br><br>
    Senha<input type="password" class="form-control" value="{{@$resultado->senha}}">
    <select name="permissao" id="permissao">
            <option value="1">Colaborador</option>
            <option value="2">Coordenador</option>
    </select>
    <input type="hidden" name="id" value="{{@$resultado->$created_at}}">
    <input type="hidden" name="id" value="{{@$resultado ->$id}}">
    <button type="submit" class="btn btn-primary">Submit</button>   
</form>

@endsection