<?php
$resultado = "";

if (isset($_POST['temp'])) {
    $temp = $_POST['temp'];
    $tipo = $_POST['tipo'];

    if ($tipo == "C_F") {
        $res = ($temp * 9/5) + 32;
        $resultado = "{$temp}°C = {$res}°F";
    } else {
        $res = ($temp - 32) * 5/9;
        $resultado = "{$temp}°F = " . round($res, 2) . "°C";
    }
}
?>

<form method="POST">
    <input type="number" step="any" name="temp" required>
    
    <select name="tipo">
        <option value="C_F">Celsius para Fahrenheit</option>
        <option value="F_C">Fahrenheit para Celsius</option>
    </select>

    <button type="submit">Converter</button>
</form>

<h3><?php echo $resultado; ?></h3>