<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Chamadas Gravadas</title>
</head>
<body>

    <h1>Alunos Presentes na Chamada</h1>

    <?php
    $caminhoArquivo = __DIR__ . "/chamadas.txt";

    // Verifica se o arquivo existe e tem conteúdo
    if (file_exists($caminhoArquivo) && filesize($caminhoArquivo) > 0) {
        $linhas = file($caminhoArquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        ?>

        <ul>
            <?php foreach ($linhas as $linha): ?>
                <li><?= htmlspecialchars($linha) ?></li>
            <?php endforeach; ?>
        </ul>

    <?php 
    } else {
        echo "<p>Nenhuma chamada registrada até o momento.</p>";
        
        // Diagnóstico: exibe se o arquivo foi encontrado na pasta do projeto
        if (file_exists($caminhoArquivo)) {
            echo "<p><em>Status: O arquivo 'chamadas.txt' existe na pasta, mas está vazio.</em></p>";
        } else {
            echo "<p><em>Status: O arquivo 'chamadas.txt' ainda não foi criado no servidor.</em></p>";
        }
    }
    ?>

    <br>
    <a href="index.php">Fazer Nova Chamada</a>

</body>
</html>
