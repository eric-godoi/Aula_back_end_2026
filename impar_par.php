<?php
    function ParOuImpar($num) {
        if ($num % 2 == 0) {
            return "Par";
        } else {
            return "impar";
        }
    }
    echo ParOuImpar($_POST[('n1')]);
?>