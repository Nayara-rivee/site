<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
require_once 'config.php'; // conexão com o banco

$email = $_GET['email'] ?? '';

if (empty($email)) {
    echo json_encode([
        "success" => false,
        "message" => "Email não informado"
    ]);
    exit;
}

// Aqui mudamos de $conn para $conexao
$sql = "SELECT nome, plano FROM usuarios WHERE email = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode([
        "success" => false,
        "message" => "Usuário não encontrado"
    ]);
    exit;
}

$user = $result->fetch_assoc();

echo json_encode([
    "success" => true,
    "nome" => $user['nome'],
    "plano" => $user['plano'] ?? 'Não definido'
]);
