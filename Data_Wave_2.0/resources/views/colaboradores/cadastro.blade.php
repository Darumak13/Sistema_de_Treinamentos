<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
    <link rel="stylesheet" href="../assets/css/funcionario-style.css">
</head>
<body>
    <div class="cadastro-container">
        <h2>Cadastro de Funcionários</h2>
        <form action="/colaboradores/salvar" method="post" id="cadastroForm">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{@$resultado->email}}" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" value="{{@$resultado->senha}}" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="Permissao">Permissão</label>
                <select name="permissao" id="permissao">
                    <option value="1">Colaborador</option>
                    <option value="2">Coordenador</option>
                </select>
            </div>
            <label for="Cargos">Cargo</label>
            <select name="idCargo" id="idCargo">
                @foreach ($cargos as $carg)
                    <option value="{{$carg->id}}">{{$carg->nome}}</option>
                @endforeach
             </select>
            <input type="hidden" name="id" value="{{@$resultado->$created_at}}">
            <input type="hidden" name="id" value="{{@$resultado ->$id}}">
            <button type="submit" id="btn-cadastrar-sub">Cadastrar</button>
        </form>
    </div>

    <script src="../assets/js/script.js"></script>
</body>
</html>
