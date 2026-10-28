<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $maior = max($n1, $n2, $n3, $n4, $n5);
    $menor = min($n1, $n2, $n3, $n4, $n5);
    echo "O maior numero entre $n1, $n2, $n3, $n4 e $n5 é: $maior<br>";
    echo "O menor numero entre $n1, $n2, $n3, $n4 e $n5 é: $menor<br>";