<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Menstruação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Calculadora de Menstruação</h2>
    
    <form action="calculadora.php" method="post">
        <label for="data_ultima_menstruacao">Data da última menstruação:</label>
        <input type="date" id="data_ultima_menstruacao" name="data_ultima_menstruacao" required>

        <label for="media_ciclo">Duração da Menstruação (em dias) 🩸:</label>
        <input type="number" id="media_ciclo" name="media_ciclo" required>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>
