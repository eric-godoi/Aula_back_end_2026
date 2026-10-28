<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calcular Fatorial</title>
</head>
<body>

    <form action="fatorial.php" method="post">
        <label for="n1">Insira um número inteiro (≥ 0):</label>
        <input type="number" min="0" step="1" id="n1" name="n1" required>
        <br><br>

        <button type="submit">Calcular</button> 
    </form>
    
    <?php    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once "funcao.php";
        $n1 = $_POST['n1'] ?? "";

        if ($n1 !== "") {
            print fatorial($n1);
        }
    }
    ?>

</body>
</html>