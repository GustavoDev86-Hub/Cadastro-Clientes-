<?php
$host = "localhost";
$usuario = "dev_user"; // O usuário que criamos no passo 1
$senha = "sua_senha_aqui"; 
$banco = "sistema_clientes";

$conn = new mysqli("localhost", "gusta_dev", "123456", "sistema_clientes");

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Preparar e executar a inserção (usando Prepared Statements para segurança)
$sql = "INSERT INTO clientes (nome, email) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nome, $email);

if ($stmt->execute()) {
    echo "Cliente cadastrado com sucesso!";
    echo "<br><a href='index.php'>Voltar</a>";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$stmt->close();
$conn->close();
?>