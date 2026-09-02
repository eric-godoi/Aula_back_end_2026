<?php
$alunos = $_POST['aluno'] ?? [];

if (!empty($alunos)) {
    $arquivo = fopen("chamadas.txt", "a");

    foreach ($alunos as $dados) {
        $nome = $dados['nome'] ?? '';
        $ra = $dados['ra'] ?? '';
        $turma = $dados['turma'] ?? '';

        $linha = "Turma: {$turma} | RA: {$ra} | Nome: {$nome}\n";
        fwrite($arquivo, $linha);
    }

    fclose($arquivo);

    header("Location: listar_chamada.php");
    exit();
} else {
    echo "Nenhum dado de aluno foi recebido!";
}
?>