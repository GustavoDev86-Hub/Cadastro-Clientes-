<?php
// 1. Conexão (use o usuário 'gusta_dev' que criamos)
$conn = new mysqli("db", "gusta_dev", "123456", "sistema_clientes");

// 2. Pegar o ID da URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // 3. Preparar o Delete (Segurança contra SQL Injection)
    $sql = "DELETE FROM clientes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); // "i" de integer

    if ($stmt->execute()) {
        // 4. Se deu certo, volta para a index automaticamente
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>