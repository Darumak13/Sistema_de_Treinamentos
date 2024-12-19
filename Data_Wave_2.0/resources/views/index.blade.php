<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="assets/css/funcionario-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/img/data-wave-ico.ico">
</head>
<body>
    <div>
        <img src="assets/img/Data-Wave-LOGO.png" alt="logo-data-wave" id="logo-data-wave">
    </div>
    <header>
        <p style="color: white;" id="section-title">PÁGINA INICIAL</p>
        <p style="color: white;" id="user-title">COLABORADOR</p>
        <img src="assets/img/Chester-Bennington.jpg" alt="icone-login" id="user-icon">
    </header>

    <main>
        <div id="conteudo">
            @yield('conteudo')  <!-- O conteúdo da página será renderizado aqui -->
            <div espaco-publicacao>

            </div>
        </div>
    </main>

    <!-- Painel lateral com as guias -->
    <nav id="side-nav">
        <ul>
            <li><a href="#">INÍCIO</a></li>
            <li><a href="#">NOTIFICAÇÕES</a></li>
            <li><a href="#">PUBLICAÇÕES</a></li>
            <li><a href="#">MINHA FICHA</a></li>
            <li><a href="#">TREINAMENTO</a></li>
            <li><a href="#">CONFIGURAÇÕES</a></li>
            <li><a href="#">SUPORTE</a></li>
        </ul>
    </nav>
</body>
</html>