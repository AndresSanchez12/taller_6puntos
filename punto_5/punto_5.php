<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor a Binario</title>    
</head>
<body>
    <h2>Convertir Número a Binario</h2>
    <form method="POST">
        <input type="number" name="numero" placeholder="Ingrese un número entero" required>
        <button type="submit">Convertir</button>
    </form>
    
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
</body>
</html>