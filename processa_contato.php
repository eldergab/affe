<?php
// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coleta e sanitiza os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
    
    // Valida os campos obrigatórios
    if (empty($nome) || empty($email) || empty($mensagem)) {
        die('Por favor, preencha todos os campos obrigatórios.');
    }

    // Valida formato do email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Por favor, insira um email válido.');
    }

    // Data e hora atual
    $data = date('d/m/Y H:i:s');
    
    // Formata a mensagem para salvar
    $mensagemFormatada = "--- NOVO CONTATO ---\n";
    $mensagemFormatada .= "Data: $data\n";
    $mensagemFormatada .= "Nome: $nome\n";
    $mensagemFormatada .= "E-mail: $email\n";
    $mensagemFormatada .= "Assunto: $assunto\n";
    $mensagemFormatada .= "Mensagem: $mensagem\n\n";

    // Caminho do arquivo para salvar os contatos
    $arquivoContatos = 'contatos.txt';
    
    // Salva no arquivo
    if (file_put_contents($arquivoContatos, $mensagemFormatada, FILE_APPEND | LOCK_EX) !== false) {
        // Redireciona de volta com mensagem de sucesso
        header('Location: contato.html?status=success');
    } else {
        // Redireciona de volta com mensagem de erro
        header('Location: contato.html?status=error');
    }
    exit;
} else {
    // Se alguém tentar acessar diretamente o script
    header('Location: contato.html');
    exit;
}
?>
