<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funções Matemáticas</title>
</head>
<body>

    <h2>Escolha uma Função Matemática:</h2>

    <!-- ETAPA 1: Escolhe a função e recarrega para mostrar o formulário -->
    <form action="Index.php" method="get">
        <select name="funcao" required>
            <option value="">-- Selecione --</option>
            <option value="maior_menor">Maior e Menor (5 números)</option>
            <option value="raiz_quadrada">Raiz Quadrada</option>
            <option value="potencia">Potenciação</option>
            <option value="valor_absoluto">Valor Absoluto</option>
            <option value="numero_aleatorio">Número Aleatório</option>
            <option value="arredondamento">Arredondamento</option>
        </select>
        <button type="submit">Escolher</button>
    </form>

    <hr>

    <!-- ETAPA 2: Exibe o formulário que envia os dados para o ficheiro final -->
    <?php if (isset($_GET['funcao'])): ?>
        <?php $funcao = $_GET['funcao']; ?>

        <!-- 1. Maior e Menor -> envia para maior_menor.php -->
        <?php if ($funcao === 'maior_menor'): ?>
            <h3>Maior e Menor</h3>
            <form action="maior_menor.php" method="post">
                <input type="number" step="any" name="n1" placeholder="Número 1" required><br><br>
                <input type="number" step="any" name="n2" placeholder="Número 2" required><br><br>
                <input type="number" step="any" name="n3" placeholder="Número 3" required><br><br>
                <input type="number" step="any" name="n4" placeholder="Número 4" required><br><br>
                <input type="number" step="any" name="n5" placeholder="Número 5" required><br><br>
                <button type="submit">Enviar</button>
            </form>

        <!-- 2. Raiz Quadrada -> envia para raiz_quadrada.php -->
        <?php elseif ($funcao === 'raiz_quadrada'): ?>
            <h3>Raiz Quadrada</h3>
            <form action="raiz_quadrada.php" method="post">
                <label>Digite o número:</label><br>
                <input type="number" step="any" name="n" required><br><br>
                <button type="submit">Enviar</button>
            </form>

        <!-- 3. Potenciação -> envia para potencia.php -->
        <?php elseif ($funcao === 'potencia'): ?>
            <h3>Potenciação</h3>
            <form action="potencia.php" method="post">
                <label>Base (n1):</label><br>
                <input type="number" step="any" name="n1" required><br><br>
                <label>Expoente (n2):</label><br>
                <input type="number" step="any" name="n2" required><br><br>
                <button type="submit">Enviar</button>
            </form>

        <!-- 4. Valor Absoluto -> envia para valor_absoluto.php -->
        <?php elseif ($funcao === 'valor_absoluto'): ?>
            <h3>Valor Absoluto</h3>
            <form action="valor_absoluto.php" method="post">
                <label>Digite o número:</label><br>
                <input type="number" step="any" name="n" required><br><br>
                <button type="submit">Enviar</button>
            </form>

        <!-- 5. Número Aleatório -> envia para numero_aleatorio.php -->
        <?php elseif ($funcao === 'numero_aleatorio'): ?>
            <h3>Número Aleatório</h3>
            <form action="numero_aleatorio.php" method="post">
                <label>Mínimo (n1):</label><br>
                <input type="number" name="n1" required><br><br>
                <label>Máximo (n2):</label><br>
                <input type="number" name="n2" required><br><br>
                <button type="submit">Enviar</button>
            </form>

        <!-- 6. Arredondamento -> envia para arredondamento.php -->
        <?php elseif ($funcao === 'arredondamento'): ?>
            <h3>Arredondamento</h3>
            <form action="arredondamento.php" method="post">
                <label>Digite o número:</label><br>
                <input type="number" step="any" name="n" required><br><br>
                <button type="submit">Enviar</button>
            </form>
        <?php endif; ?>

    <?php endif; ?>

</body>
</html>
