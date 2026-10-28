<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calcular Área do Círculo</title>
</head>
<body>

    <form action="area_circulo.php" method="post">
        <label for="raio">Insira o raio do círculo:</label>
        <input type="number" step="any" min="0" id="raio" name="raio" required>
        <br><br>

        <button type="submit">Calcular</button> 
    </form>
    
    <?php    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once "funcao.php";
        $raio = $_POST['raio'] ?? "";

        if ($raio !== "") {
            print AreaCirculo ($raio);
        }
    }
    ?>

</body>
</html>