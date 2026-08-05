<?php
$idade = 20;
$temCarteira = true;
if ($idade >= 18 && $temCarteira){ 
    echo "Pode dirigir. ";
}
elseif ($idade >= 18 && $temCarteira == false){
    echo "Precisa tirar carteira ";
}
else {
    echo "Você é menor de idade ";
}
?>