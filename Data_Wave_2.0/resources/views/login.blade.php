
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login-style.css">
    <link rel="icon" href="assets/img/data-wave-ico.ico">
    <script defer src="assets/js/login.js"></script>
    <title>Data Wave Web</title>
</head>
<body>
  <img src="assets/img/wave-background.png" alt="waves" id="waves-background">
  <img src="assets/img/Data-Wave-LOGO.png" alt="logo-data-wave" id="logo-data-wave">
    <div class="login-box">
        <form id="emailForm" action="{{ route('login.process')}}" method="POST">
          @csrf
          @method('POST')
          <div class="user-box">
            <input type="text" name="email" required="">
            <label>Usuário</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Senha</label>
          </div>
          <div class="user-box">
            <input type="number" name="permissao" min="0" max="1" required="">
            <Label>Permissão</Label>
          </div>
          <center>
          <a href="#" onclick="submitForm()">
            <input type="submit" value="Submit">
                 LOGIN
             <span></span>
          </a></center>
        </form>
      </div>
</body>
</html>