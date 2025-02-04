<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DatabWave - Página Inicial</title>
    <link rel="stylesheet" href="funcionario-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li id="homeBtn"><i class="fas fa-home"></i> INÍCIO</li>
            <li id="notificationsBtn"><i class="fas fa-bell"></i> NOTIFICAÇÕES</li>
            <li id="publicationsBtn"><i class="fas fa-newspaper"></i> PUBLICAÇÕES</li>
            <div class="divider"></div>
            <li id="personalInfoBtn"><i class="fas fa-user"></i> MINHA FICHA</li>
            <li id="trainingBtn"><i class="fas fa-bullseye"></i> TREINAMENTO</li>
            <div class="divider"></div>
            <li id="configButton"><i class="fas fa-cog"></i> CONFIGURAÇÕES</li>
            <li><i class="fas fa-life-ring"></i> SUPORTE</li>
        </ul>
    </div>
    
    <header>
        <div class="left">
            <p id="section-title">PÁGINA INICIAL</p>
        </div>
        <div class="right">
            <p id="user-title">COLABORADOR</p>
            <img src="img/Chester-Bennington.jpg" alt="icone-login" id="user-icon">
        </div>
    </header>    

    <div class="content" id="contentArea">
        <h1>Bem-vindo(a)!</h1>
        <p>O conteúdo principal será exibido aqui.</p>
    </div>

    <!-- Fundo escurecido -->
    <div id="overlay" class="overlay"></div>

    <!-- Menu de Configurações -->
    <div id="configContainer" class="config-container">
        <div class="config-sidebar">
            <div class="profile-img"></div>
            <h3>Menu</h3>
            <ul>
                <li id="personalInfoMenuBtn">Informações Pessoais</li>
            </ul>
        </div>
        <div class="config-content">
            <h2>Informações Pessoais</h2>
            <label>Nome Completo:</label>
            <input type="text" class="input-field" disabled placeholder="" />
            <label>Email:</label>
            <input type="text" class="input-field" disabled placeholder="" />
            <label>Celular:</label>
            <input type="text" class="input-field" disabled placeholder="" />
            <label>Telefone:</label>
            <input type="text" class="input-field" disabled placeholder="" />
            <div class="change-password">Alterar a Senha?</div>
        </div>
        <button id="closeBtn" class="close-btn">&times;</button>
    </div>

    <script src="script.js"></script>
</body>
</html>
