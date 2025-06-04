<?php
header('Content-Type: application/json');

require 'vendor/autoload.php'; // PHPMailer (use composer require phpmailer/phpmailer)

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// CONFIGURAÇÕES DO BANCO DE DADOS
$host = 'localhost';
$db = 'login';
$user = 'root';
$pass = '';

// DADOS DO FORMULÁRIO
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

// VALIDAÇÃO
if (empty($nome) || empty($email) || empty($mensagem)) {
    echo json_encode(['success' => false, 'message' => 'Campos obrigatórios não preenchidos.']);
    exit;
}

// ENVIO DE E-MAIL COM PHPMailer
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'nayarasp07@gmail.com'; // Seu e-mail
    $mail->Password   = 'ngtq wbhk uegs vkbw'; // Senha de app do Gmail
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('nayarasp07@gmail.com', 'Contato do Site');
    $mail->addAddress('nayarasp07@gmail.com'); // Para onde será enviado

    $mail->isHTML(true);
    $mail->Subject = "Novo pedido de site - $nome";
    $mail->Body    = "<strong>Nome:</strong> $nome<br><strong>Email:</strong> $email<br><strong>Mensagem:</strong><br>$mensagem";

    $mail->send();
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => "Erro ao enviar e-mail: {$mail->ErrorInfo}"]);
    exit;
}

// SALVAR NO BANCO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $stmt = $pdo->prepare("INSERT INTO pedidos (nome, email, mensagem, plano) VALUES (?, ?, ?, ?)");
    $planoExtraido = strpos($mensagem, 'Plano:') !== false ? trim(explode("\n", $mensagem)[0]) : 'Indefinido';
    $stmt->execute([$nome, $email, $mensagem, $planoExtraido]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => "Erro no banco de dados: " . $e->getMessage()]);
    exit;
}

// ENVIAR VIA API DO WHATSAPP (Z-API)
$telefoneDestino = '5521985213581'; // Número com DDI + DDD
$mensagemZap = "Novo Pedido de Site\nNome: $nome\nEmail: $email\nMensagem:\n$mensagem";

// Monta os dados para envio
$payload = json_encode([
    "phone" => $telefoneDestino,
    "message" => $mensagemZap
]);

// Envia requisição
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.z-api.io/instances/3E22DEEB28E2B034F0EA62AF4B231A0B/send-text");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Client-Token: 799BE0A4EF190B740CF10C20' // ✅ PASSA O TOKEN AQUI!
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
$response = curl_exec($ch);
curl_close($ch);

// Ver a resposta
file_put_contents("zap_response.log", $response);

echo json_encode([
    'success' => true,
    'zap_response' => json_decode($response, true)
]);

?>
