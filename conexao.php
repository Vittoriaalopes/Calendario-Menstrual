<?php

$host = "localhost";
$usuario = "root";
$senha = ""; // Substitua "sua_senha_do_banco" pela senha do seu banco de dados
$banco = "calendario";

// Cria a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida"; // Pode ser removido após testar a conexão

// Se precisar de suporte a caracteres especiais, como utf8, você pode ajustar assim:
// $conn->set_charset("utf8");

// Restante do seu código...

// Não se esqueça de fechar a conexão quando terminar de usá-la
$conn->close();

?>
