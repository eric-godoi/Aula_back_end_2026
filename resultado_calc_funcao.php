<?php
$val1 = $_POST['n1'];
    $val2 = $_POST['n2'];
    $val3 = $_POST['n3'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function media($val1, $val2, $val3)
    {
        
        $media =  ($val1 + $val2 + $val3) / 3;
        echo "<h3> Cálculo da média </h3>";
        echo "<n> A média das notas </n> <br>";
        echo "------------------------ <br>";
        echo " Nota 1 : $val1 <br>";
        echo " Nota 2 : $val2 <br>";
        echo " Nota 3 : $val3 <br>";
        echo "Media é $media <br>";
        echo "------------------------ <br>";
    
    }if (isset($val1)|| isset($val2)|| isset($val3)){
    media($val1, $val2, $val3);
    }
} else {
    echo "Nem uma nota foi fornecida !";
}

?>
