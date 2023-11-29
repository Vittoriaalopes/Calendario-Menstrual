<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>

<?php
// Incluindo o arquivo de conexão
include_once 'conexao.php';

// Consulta SQL para obter usuários
$sql = "SELECT id, nome, email FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir os dados em uma tabela
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nome']}</td>
                <td>{$row['email']}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "Nenhum usuário encontrado.";
}

// Fechar a conexão
$conn->close();
?>

</body>
</html>
