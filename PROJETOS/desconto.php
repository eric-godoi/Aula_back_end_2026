<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Desconto</title>
</head>
<body>

    <h2>Calculadora de Desconto</h2>

    <form method="POST" action="desconto.php">
        <div class="form-group">
            <label for="valor">Valor Original (R$):</label>
            <input type="number" step="0.01" min="0" id="valor" name="valor" required>
        </div>

        <div class="form-group">
            <label for="desconto">Desconto (%):</label>
            <input type="number" step="0.01" min="0" id="desconto" name="desconto" required>
        </div>

        <button type="submit">Calcular</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valorOriginal = (float) $_POST['valor'];
        $percentualDesconto = (float) $_POST['desconto'];

        $valorDesconto = ($valorOriginal * $percentualDesconto) / 100;
        $valorFinal = $valorOriginal - $valorDesconto;

        $valorOriginalFormatado = number_format($valorOriginal, 2, ',', '.');
        $valorDescontoFormatado = number_format($valorDesconto, 2, ',', '.');
        $valorFinalFormatado = number_format($valorFinal, 2, ',', '.');

        echo "
        <div class='resultado'>
            <h3>Resultado:</h3>
            <p><strong>Valor Original:</strong> R$ {$valorOriginalFormatado}</p>
            <p><strong>Desconto ({$percentualDesconto}%):</strong> R$ {$valorDescontoFormatado}</p>
            <p><strong>Valor Final:</strong> R$ {$valorFinalFormatado}</p>
        </div>
        ";
    }
    ?>

</body>
</html>