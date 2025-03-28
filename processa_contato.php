<?php
// Configurações iniciais
header('Content-Type: text/html; charset=utf-8');
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Coleta e sanitiza os dados do formulário
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
        $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
        
        // Validações
        if (empty($nome) || empty($email) || empty($mensagem)) {
            throw new Exception('Por favor, preencha todos os campos obrigatórios.');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Por favor, insira um email válido.');
        }

        if (strlen($nome) > 100 || strlen($email) > 100 || strlen($assunto) > 200 || strlen($mensagem) > 2000) {
            throw new Exception('Algum campo excedeu o tamanho máximo permitido.');
        }

        // Previne ataques de injeção
        $nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
        $assunto = htmlspecialchars($assunto, ENT_QUOTES, 'UTF-8');
        $mensagem = htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8');

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
        
        // Tenta salvar no arquivo
        if (file_put_contents($arquivoContatos, $mensagemFormatada, FILE_APPEND | LOCK_EX) === false) {
            throw new Exception('Erro ao salvar a mensagem. Por favor, tente novamente.');
        }

        // Redireciona com mensagem de sucesso
        header('Location: contato.php?status=success');
        exit;
        
    } catch (Exception $e) {
        // Armazena a mensagem de erro na sessão
        $_SESSION['form_error'] = $e->getMessage();
        header('Location: contato.php?status=error');
        exit;
    }
} else {
    // Se alguém tentar acessar diretamente o script
    header('Location: contato.php');
    exit;
}
?>
