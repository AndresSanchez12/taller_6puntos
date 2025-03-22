<?php
require_once "Estadistica.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entrada = $_POST["numeros"];
    $numeros = array_map('floatval', explode(",", $entrada));

    if (count($numeros) > 0) {
        $estadistica = new Estadistica($numeros);

        echo "<h2>Resultados:</h2>";
        echo "<p>Promedio: " . $estadistica->calcularPromedio() . "</p>";
        echo "<p>Mediana: " . $estadistica->calcularMediana() . "</p>";
        echo "<p>Moda: " . $estadistica->calcularModa() . "</p>";
    } else {
        echo "<p> ingrese al menos un número.</p>";
    }
}
?>
<br>
<a href="index.php">Volver</a>
