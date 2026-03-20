<?php
// Se você tivesse alguma lógica (como uma sessão ou conexão), ficaria aqui.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Clientes</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

    <h2>Cadastrar Novo Cliente</h2>
    <form action="processa.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <button type="submit">Salvar</button>
    </form>

    <hr>

    <h2>Clientes Cadastrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conexão direta para a listagem
            $conn = new mysqli("db", "gusta_dev", "123456", "sistema_clientes");

            if ($conn->connect_error) {
                echo "<tr><td colspan='4'>Erro ao conectar: " . $conn->connect_error . "</td></tr>";
            } else {
                $sql = "SELECT * FROM clientes ORDER BY id DESC";
                $resultado = $conn->query($sql);

                if ($resultado->num_rows > 0) {
                    // O while percorre cada linha do banco de dados
                    while($linha = $resultado->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $linha['id'] . "</td>";
                      echo "<td>" . $linha['nome'] . "</td>";
                      echo "<td>" . $linha['email'] . "</td>";
                      echo "<td>" . date('d/m/Y H:i', strtotime($linha['data_cadastro'])) . "</td>";
                      
                      // O pulo do gato: passamos o ID pela URL
                      echo "<td><a href='excluir.php?id=" . $linha['id'] . "' onclick=\"return confirm('Tem certeza?')\" style='color:red;'>Excluir</a></td>";
                      
                      echo "</tr>";
                  }
                } else {
                    echo "<tr><td colspan='4'>Nenhum cliente cadastrado.</td></tr>";
                }
                $conn->close();
            }
            ?>
        </tbody>
    </table>

</body>
</html>