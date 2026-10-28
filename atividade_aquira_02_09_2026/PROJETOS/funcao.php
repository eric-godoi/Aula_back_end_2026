<?php
// função para calcular o IMC
function imc($altura, $peso){
    if ($altura <= 0) return 0; // Previne divisão por zero
    $imc = $peso / ($altura ** 2);
    return $imc;
}


// Função para calcular o maio e menor número
function maior_menor($n1, $n2){
    if ($n1 > $n2){
        echo "Numero 1: $n1 é maior que Numero: $n2 !";
    }elseif($n1=$n2){
        echo "Numero 1: $n1 é igual a Numero 2: $n2";
    }else{
        echo "Numero 1: $n1 é menor que Numero 2: $n2";
    }
}

//impar ou par
function impar_ou_par($number){
    if ($number %2 == 0 ){
        echo "$number é par";
    }else {
        echo "$number é ímpar";
    }
}

// média
function media($nota1,$nota2,$nota3){
    if ($nota1<=0 && $nota2<=0 && $nota3<=0){
        echo "Média é 0";
    }else{

    $media = (($nota1+$nota2+$nota3) /3);
    return $media;
    }
}

//fatorial
function fatorial($n) {
    $resultado = 1;
    for ($i = 1; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

//soma
function soma($n1,$n2) {
    $soma = ($n1 + $n2);
    return $soma;
    }
    

    function areaCirculo(float $raio): float {
    return pi() * ($raio ** 2);
}

