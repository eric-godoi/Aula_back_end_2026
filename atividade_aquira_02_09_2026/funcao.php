<?php 
function chamada($i) {
?>
    <h3>Aluno <?= $i ?></h3>

    <label>Insira o nome do aluno:</label><br>
    <input type="text" name="aluno[<?= $i ?>][nome]" required><br><br>

    <label>Insira o R.A do aluno:</label><br>
    <input type="text" name="aluno[<?= $i ?>][ra]" required><br><br>

    <label>Selecione a turma:</label><br>
    <select name="aluno[<?= $i ?>][turma]" required>
        <option value="" disabled selected>Selecione uma turma...</option>
        <option value="1A">1° A</option>
        <option value="1B">1° B</option>
        <option value="1C">1° C</option>
        <option value="2A">2° A</option>
        <option value="2B">2° B</option>
        <option value="3A">3° A</option>
    </select>

    <hr>
<?php
}
?>