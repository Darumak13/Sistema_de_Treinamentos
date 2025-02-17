function submitForm() {
    // Captura o formulário e o campo de permissão
    const form = document.getElementById('emailForm');
    const permissaoInput = form.querySelector('input[name="permissao"]');
    const permissao = parseInt(permissaoInput.value); // Converte para inteiro

    // Verifica a permissão
    if (permissao === 0) {
        // Se for coordenador
        alert("Você é um/a Coordenador/a! Redirecionando para a área de coordenadores.");
        // Redireciona para a área de coordenadores
        window.location.href = "/administrativo/index";  // Coloque o URL correto da área de coordenadores
    } else if (permissao === 1) {
        // Se for colaborador
        alert("Você é um/a Secretária/a! Redirecionando para a área de colaboradores.");
        // Redireciona para a área de colaboradores
        window.location.href = "/administrativo/index";  // Coloque o URL correto da área de colaboradores
    } else {
        // Caso a permissão não seja válida
        alert("Permissão inválida! Por favor, insira uma permissão válida.");
    }

    // Para garantir que o formulário não seja enviado antes do JavaScript
    event.preventDefault();  // Impede o envio padrão do formulário
}
