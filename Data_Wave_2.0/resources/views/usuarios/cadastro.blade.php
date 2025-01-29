@extends('index')
@section('conteudo')

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/data-wave-ico.ico">
    <title>Data Wave Web</title>
</head>
<body>  
<img src="assets/img/wave-background.png" alt="waves" id="waves-background">
<img src="assets/img/Data-Wave-LOGO.png" alt="logo-data-wave" id="logo-data-wave">

<div class="login-box">
                <form action="/usuarios/salvar" method="post"> 
                @csrf
                <div class="user-box">
                        <input type="text" class="form-control" name="nome" placeholder="nome" value="{{@$resultado->nome}}"> 
                        <label>Usuário</label>
                </div>
            <div class="user-box">
                        <input type="password" name="senha" class="form-control" placeholder="Password">
                        <label>Senha</label>
            </div>
            <a href="#">
            LOGIN
                <span></span>
                </a>
                    <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{@$resultado->email}}">
                    <input name="id" type="hidden" value="{{@$resultado->id}}">
                    <button type="submit" class="btn btn-primary">Submit</button>   
                </form>

        </div>
</body>
</html>