<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($usuario === "adimin" && $senha === "123") {
  //  require "funcoes.php" ;
    header("Location: painel.php");
    exit;
} else  {
    echo "Usuário ou senha inválidos!";
}
?>