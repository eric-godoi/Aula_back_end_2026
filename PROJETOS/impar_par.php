<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>impar ou par</title>
</head>
<body>
<h1>Impar ou Par</h1>  
<form action="impar_par.php" method="post">
<label> Insira o numero que deseja saber se é impar ou par:</label>
<input type="text" id="n1" name="n1">
<button type="submit">Enviar</button>




</form>


<?php
require_once "funcao.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['n1'] ?? "";

    if ($numero !== "") {
        impar_ou_par($numero); 
    } else {
        echo "Por favor, digite um número.";
    }
}
?>
</body>
</html>