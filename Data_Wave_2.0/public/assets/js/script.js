document.addEventListener("DOMContentLoaded", function () {
    // Função para alterar o conteúdo sem recarregar a página
    function changeContent(title, content) {
      document.getElementById("section-title").innerText = title;
      document.getElementById("contentArea").innerHTML = content;
    }
  
    // Função para adicionar evento de clique de forma segura
    function addClickEventToButton(buttonId, callback) {
      const button = document.getElementById(buttonId);
      if (button) {
        button.removeEventListener("click", callback); // Remove qualquer listener antigo
        button.addEventListener("click", callback); // Adiciona o novo listener
      }
    }
  
    // Adiciona eventos aos botões do menu
    document.getElementById("homeBtn")?.addEventListener("click", function () {
      changeContent("PÁGINA INICIAL", ``);
    });
  
    document.getElementById("notificationsBtn")?.addEventListener("click", function () {
      changeContent(
        "NOTIFICAÇÕES",
        `
        <div class='notifications-container'>
          <h2>Suas Notificações</h2>
          <div class='notifications-list' id='notificationsList'></div>
        </div>
      `
      );
      addNotification("Jane Doe", "Arquivo de Design", "2 horas atrás");
    });
  
    function addNotification(user, file, time) {
      const notificationsList = document.getElementById("notificationsList");
      if (notificationsList) {
        notificationsList.innerHTML += `
          <div class="card">
            <div class="container">
              <div class="left">
                <div class="status-ind"></div>
              </div>
              <div class="right">
                <div class="text-wrap">
                  <p class="text-content">
                    <a class="text-link" href="#">${user}</a> convidou você para editar o
                    <a class="text-link" href="#">${file}</a>.
                  </p>
                  <p class="time">${time}</p>
                </div>
                <div class="button-wrap">
                  <button class="primary-cta">Ver arquivo</button>
                  <button class="secondary-cta">Marcar como lida</button>
                </div>
              </div>
            </div>
          </div>
        `;
      }
    }
  
    document.getElementById("publicationsBtn")?.addEventListener("click", function () {
      changeContent("PUBLICAÇÕES", ``);
    });
  
    document.getElementById("fichaTecnicaBtn")?.addEventListener("click", function () {
      changeContent("FICHA TÉCNICA", ``);
    });
  
    document.getElementById("cadastroBtn")?.addEventListener("click", function () {
      changeContent(
        "CADASTRO",
        `
        <div class="menu-cadastro">
          <button id="verFuncionariosBtn">VISUALIZAR FUNCIONÁRIOS</button>
          <button id="cadastrarFuncionarioBtn">CADASTRAR FUNCIONÁRIOS</button>
        </div>
      `
      );
  
      document.getElementById("verFuncionariosBtn")?.addEventListener("click", function () {
        changeContent("Funcionários", `<div class="funcionarios-container" id="funcionariosList"></div>`);
      });
  
      addClickEventToButton("cadastrarFuncionarioBtn", function () {
        document.querySelector(".menu-cadastro").innerHTML = "";
        document.querySelector("#contentArea").innerHTML = `
          <h2>Cadastro de Funcionários</h2>
            <form id="cadastroForm">
              <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
              </div>
  
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
              </div>
  
              <div class="form-group">
                <label for="cargo">Cargo:</label>
              <select id="cargo">
                <option value="dev">Desenvolvedor</option>
                <option value="designer" selected>Designer</option>
                <option value="gerente">Gerente</option>
              </select>
              </div>
  
              <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
              </div>
  
              <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="password" name="senha" required>
              </div>
  
              <div class="form-group">
                <label for="confirmSenha">Confirmar Senha:</label>
                <input type="password" id="confirmSenha" required>
                <p id="erroSenha" style="color: red; display: none;">As senhas não coincidem!</p>
              </div>
  
              <button type="submit" id="btn-cadastrar-sub">Cadastrar</button>
              <button type="button" id="cancelCadastroBtn">Cancelar</button>
            </form>
          `;
  
        addClickEventToButton("cancelCadastroBtn", function () {
          changeContent(
            "CADASTRO",
            `
            <div class="menu-cadastro">
              <button id="verFuncionariosBtn">VISUALIZAR FUNCIONÁRIOS</button>
              <button id="cadastrarFuncionarioBtn">CADASTRAR FUNCIONÁRIOS</button>
            </div>
          `
          );
        });
  
        document.getElementById("cadastroForm")?.addEventListener("submit", function (event) {
          event.preventDefault();
          alert("Funcionário cadastrado com sucesso!");
        });
      });
    });
  
    document.getElementById("trainingBtn")?.addEventListener("click", function () {
      changeContent("TREINAMENTO", ``);
    });
  
    function selectConfigTab(tabName) {
      const configContent = document.querySelector(".config-content");
      if (tabName === "Informações Pessoais") {
        configContent.innerHTML = `
          <img src="img/Chester-Bennington.jpg" alt="icone-login" id="user-icon"><br>
          <a href="" id="alterar-perfil-btn">Alterar Perfil</a>
          <label>Nome Completo:</label><br>
          <input type="text" class="input-field" disabled placeholder="" /><br>
          <label>Email:</label><br>
          <input type="text" class="input-field" disabled placeholder="" /><br>
          <label>Celular:</label><br>
          <input type="text" class="input-field" disabled placeholder="" /><br>
          <label>Telefone:</label><br>
          <input type="text" class="input-field" disabled placeholder="" /><br>
          <div class="change-password"><a href="">Alterar Senha?</a></div>
        `;
      }
    }
  
    document.getElementById("personalInfoBtn")?.addEventListener("click", function () {
      selectConfigTab("Informações Pessoais");
    });
  });
  