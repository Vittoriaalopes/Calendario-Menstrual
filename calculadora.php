<?php
function calcularPrevisaoMenstruacao($dataUltimaMenstruacao, $mediaCiclo) {
    try {
        // Validar a data
        $dataUltima = new DateTime($dataUltimaMenstruacao);
    } catch (Exception $e) {
        return ["error" => "Erro ao processar a data: " . $e->getMessage()];
    }

    // Validar a média do ciclo
    if (!is_numeric($mediaCiclo) || $mediaCiclo <= 0) {
        return ["error" => "A média do ciclo deve ser um número positivo."];
    }

    // Calcular a previsão
    $previsao = clone $dataUltima;
    $previsao->add(new DateInterval("P{$mediaCiclo}D"));

    // Calcular o início da próxima menstruação (por exemplo, 14 dias após a última menstruação)
    $inicioProximaMenstruacao = clone $dataUltima;
    $inicioProximaMenstruacao->add(new DateInterval("P28D"));

    return [
        "dataUltima" => $previsao->format('d-m-Y'),
        "previsao" => $previsao->format('d-m-Y'),
        "inicio_proxima_menstruacao" => $inicioProximaMenstruacao->format('d-m-Y')
    ];
}

// Verificar se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dataUltimaMenstruacao = $_POST['data_ultima_menstruacao'];
    $mediaCiclo = $_POST['media_ciclo'];

    $resultado = calcularPrevisaoMenstruacao($dataUltimaMenstruacao, $mediaCiclo);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Resultado</h2>

    <?php if (isset($resultado['error'])): ?>
        <p class="error"><?php echo $resultado['error']; ?></p>
    <?php elseif (isset($resultado['previsao'])): ?>
        <p class="result">A previsão para o fim da menstruação é: <?php echo $resultado['previsao']; ?></p>
        <p class="result">O início da próxima menstruação é: <?php echo $resultado['inicio_proxima_menstruacao']; ?></p>
    <?php endif; ?>
    
    <p><a href="index.php">Voltar</a></p>
</body>
</html>
