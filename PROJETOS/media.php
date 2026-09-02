<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>média</title>
</head>
<body>
<h1>Calvulo Média</h1>  
<form action="media.php" method="post">
<label> Insira os numeros que deseja descobrir a média:</label>
<input type="text" id="n1" name="n1">
<input type="text" id="n2" name="n2">
<input type="text" id="n3" name="n3">
<button type="submit">Enviar</button>




</form>



<?php
require_once "funcao.php";

$nota1 = $_POST['n1'] ?? "";
$nota2  = $_POST['n2'] ?? "";
$nota3  = $_POST['n3'] ?? "";

echo media($nota1,$nota2,$nota3);
?>
</body>
</html>