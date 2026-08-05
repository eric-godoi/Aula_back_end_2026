<?php
$tabuada = $_GET[('numero')]?? '';
echo "a tabuada do $tabuada é ";
 for ($i = 1; $i <= 10; $i++){
echo "<br>";
echo ($tabuada*$i);
 }
?>