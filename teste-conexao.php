<?php
$host = 'localhost';       // ou o IP do servidor MySQL
$user = 'root';     // substitua pelo seu usuário do banco
$pass = '';       // substitua pela senha correta
$db   = 'login';       // substitua pelo nome real do banco

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("❌ Erro de conexão com o banco: " . $conn->connect_error);
}

echo "✅ Conexão bem-sucedida com o banco de dados!";
$conn->close();
?>
