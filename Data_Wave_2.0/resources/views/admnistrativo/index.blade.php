<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DatabWave - Secretaria</title>
    <link rel="stylesheet" href="../assets/css/funcionario-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="../assets/img/data-wave-ico.ico">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li id="homeBtn"><i class="fas fa-home"></i> INÍCIO</li>
            <li id="notificationsBtn"><i class="fas fa-bell"></i> NOTIFICAÇÕES</li>
            <li id="publicationsBtn"><i class="fas fa-newspaper"></i> PUBLICAÇÕES</li>
            <div class="divider"></div>
            <li id="fichaTecnicaBtn"><i class="fas fa-file-alt"></i> FICHA TÉCNICA</li>
            <li id="cadastroBtn"><i class="fas fa-user-plus"></i> CADASTRO</li>
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
            <p id="user-title">SECRETÁRIO(A)</p>
            <img src="http://localhost:8090/assets/img/Chester-Bennington.jpg" alt="icone-login" id="user-icon">
        </div>
    </header>    

    <div class="content">
        <div id="contentArea">
        </div>
    </div>

    <div id="overlay" class="overlay"></div>

    <div id="configContainer" class="config-container">
        <div class="config-sidebar">
            <div class="profile-img"></div>
            <h3 id="title-config">Configurações</h3>
            <div class="divider"></div>
            <ul>
                <li id="personalInfoBtn" class="active">Informações Pessoais</li>
            </ul>
        </div>
        <div class="config-content">
            <!-- O conteúdo das abas será carregado dinamicamente pelo JavaScript -->       
             
        </div>
        <button id="closeBtn" class="close-btn">&times;</button>
    </div>

    <script src="../assets/js/script.js"></script>
</body>
</html>
