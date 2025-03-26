<?php
require_once "Conjunto.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $entradaA = $_POST["conjuntoA"];
    $entradaB = $_POST["conjuntoB"];
    $A = array_map('intval', explode(",", $entradaA));
    $B = array_map('intval', explode(",", $entradaB));
    $conjuntos = new Conjunto($A, $B);

    echo "<h2>Resultados:</h2>";
    echo "<p><strong>Unión (A ∪ B):</strong> {" . implode(", ", $conjuntos->union()) . "}</p>";
    echo "<p><strong>Intersección (A ∩ B):</strong> {" . implode(", ", $conjuntos->interseccion()) . "}</p>";
    echo "<p><strong>Diferencia (A - B):</strong> {" . implode(", ", $conjuntos->diferenciaAB()) . "}</p>";
    echo "<p><strong>Diferencia (B - A):</strong> {" . implode(", ", $conjuntos->diferenciaBA()) . "}</p>";
}
?>
<br>
<button class="volver" onclick="window.location.href='../punto_4/punto_4.php'">Volver</button>
<head>
    <link rel="stylesheet" href="../css.css">
</head>
