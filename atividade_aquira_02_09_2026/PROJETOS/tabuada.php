<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada Simples</title>
</head>
<body>

    <form method="POST">
        <input type="number" name="numero" placeholder="Digite um número" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        echo "<h3>Tabuada do $numero:</h3>";

        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    }
    ?>

</body>
</html>