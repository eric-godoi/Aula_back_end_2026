<?php
file_put_contents("log.txt", "Usuário acessou em " . date("d/m/y H:i:s") . "\n", FILE_APPEND);
echo "Arquivo criado com sucesso !"
?>