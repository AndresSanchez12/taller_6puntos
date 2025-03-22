<?php
    class ConversorBinario {
        public function convertir($numero) {
            return decbin($numero);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        $conversor = new ConversorBinario();
        $binario = $conversor->convertir($numero);
        echo "<h3>El número en binario es: $binario</h3>";
    }
?>