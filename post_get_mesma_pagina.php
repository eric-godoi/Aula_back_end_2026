<form method="GET" action="post_get_mesma_pagina.php">
    cor:
    <input type="text" name="cor" value= ""><br>
    tipo:
    <input type="text" name="tipo" value=""><br>

<input type="submit" value="cadastro">


</form>

<?php
    $cor = $_POST['cor'] ?? "";
    $tipo = $_POST['tipo'] ?? "";
    $produto = $_GET['produto'] ?? "(Não selecionado)";

    if(empty($_POST["cor"])){
        echo "A cor do $produto é $cor do tipo $tipo ";
    }
?>