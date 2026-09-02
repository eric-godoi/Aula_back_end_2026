<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de IMC</title>
</head>
<body>

    <h2>Calculadora de IMC</h2>

    <form action="calculo_imc.php" method="post">
        <label for="altura">Altura (m):</label>
        <input type="text" id="altura" name="altura"  required>
        <br><br>

        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso" required>
        <br><br>

        <button type="submit">Calcular IMC</button>
    </form>

    <hr>

    <?php
    require_once "funcao.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $altura = $_POST['altura'] ?? "";
        $peso   = $_POST['peso']   ?? "";
            $resultado = imc($altura, $peso);

            echo "O IMC é " . number_format($resultado, 2, ',', '.');
        } else {
            echo "Por favor, preencha todos os campos.";
        }
    
    ?>

</body>
</html>
