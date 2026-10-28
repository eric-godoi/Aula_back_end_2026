<?php
echo "<H2> Informacões de Acesso</H2>";

$ip = $_SERVER['REMOTE_ADDR'];
$navegador = $_SERVER['HTTP_USER_AGENT'];
$servidor = gethostname();
$versaoPHP = phpversion();

echo " IP do Usuário" . $ip . "<br>";
echo " Navegador: " . $navegador . "<br>";
echo " Servidor: " . $servidor . "<br>";
echo " Versão do PHP" . $versaoPHP . "<br>";

?>