<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
require_once 'src/pages/config.php'; // usa $conexao

$email = $_GET['email'] ?? '';

if (empty($email)) {
    echo json_encode([
        "success" => false,
        "message" => "Email não informado"
    ]);
    exit;
}

$sql = "SELECT progresso, mensagem, data_atualizacao FROM projetos WHERE email = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode([
        "success" => false,
        "message" => "Projeto não encontrado para este usuário"
    ]);
    exit;
}

$projeto = $result->fetch_assoc();

echo json_encode([
    "success" => true,
    "progresso" => floatval($projeto['progresso']),
    "mensagem" => $projeto['mensagem'],
    "data_atualizacao" => $projeto['data_atualizacao']
]);
