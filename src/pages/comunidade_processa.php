<?php
// Conexão com o banco
$host = 'localhost';
$db = 'login';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}

// Coletar dados do formulário
$nome_comunidade = $_POST['nome_comunidade'];
$telefone_comunidade = $_POST['telefone_comunidade'];
$email = $_POST['email'];
$data_entrada = date("Y-m-d H:i:s");

// Atualizar usuário existente com base no email
$stmt = $conn->prepare("UPDATE usuarios SET nome_comunidade = ?, telefone_comunidade = ?, entrou_no_grupo = 1, entrou_no_grupo_em = ? WHERE email = ?");
$stmt->bind_param("ssss", $nome_comunidade, $telefone_comunidade, $data_entrada, $email);

if ($stmt->execute()) {
    // Redirecionar para o grupo do WhatsApp
    header("Location: https://chat.whatsapp.com/SEU_LINK_DO_GRUPO");
    exit;
} else {
    echo "Erro ao atualizar: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
