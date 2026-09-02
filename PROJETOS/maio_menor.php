<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Comparar Números</title>
</head>
<body>

    <form action="maio_menor.php" method="post">
        <label for="n1">Insira o primeiro número:</label>
        <input type="number" step="any" id="n1" name="n1" required>
        <br><br>

        <label for="n2">Insira o segundo número:</label>
        <input type="number" step="any" id="n2" name="n2" required>
        <br><br>

        <button type="submit">Enviar</button> 
    </form>
    
     <?php    
    require_once "funcao.php";

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n1 = $_POST['n1'] ?? "";
        $n2 = $_POST['n2'] ?? "";

        if ($n1 !== "" && $n2 !== "") {
            maior_menor($n1, $n2);
        } else {
            echo "Por favor, preencha ambos os números.";
        }
    }
    ?>

</body>
</html>
