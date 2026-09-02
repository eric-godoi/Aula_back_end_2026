<?php require_once "funcao.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamada</title>
</head>
<body>

    <h1>Lista de Chamada</h1>

    <form method="POST" action="index.php">
        <label for="qtd">Quantos alunos vieram?</label>
        <input type="number" id="qtd" name="qtd" min="1" value="<?= $_POST['qtd'] ?? '' ?>" required>
        <button type="submit">Confirmar Quantidade</button>
    </form>

    <hr>

    <?php 
    $total = $_POST['qtd'] ?? 0;

    if ($total > 0): 
    ?>
        <form action="gravar_chamada.php" method="POST">
            <!-- Mantém a quantidade salva no envio -->
            <input type="hidden" name="qtd" value="<?= $total ?>">

            <?php 
            $i = 1;
            while ($i <= $total) {
                chamada($i);
                $i++;
            }
            ?>
            <button type="submit">Gravar Chamada</button>
        </form>
    <?php endif; ?>

</body>
</html>