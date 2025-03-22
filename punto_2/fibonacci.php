<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function fibonacci($n) {
        $serie = [0, 1];
        
        for ($i = 2; $i < $n; $i++) {
            $serie[] = $serie[$i - 1] + $serie[$i - 2];
        }
        
        return implode(", ", array_slice($serie, 0, $n));
    }

    function factorial($n) {
        $resultado = 1;
        
        for ($i = 1; $i <= $n; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }

    $numero = intval($_POST["numero"]);
    $operacion = $_POST["operacion"];
    $resultado = "";

    if ($numero < 0) {
        $resultado = "Error: Ingrese un número válido (mayor o igual a 0).";
    } else {
        if ($operacion == "fibonacci") {
            $resultado = fibonacci($numero);
        } elseif ($operacion == "factorial") {
            $resultado = factorial($numero);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci y Factorial</title>
    <link rel="stylesheet" href="../css.css">
</head>
<body>
    <h2>Calculadora de Fibonacci y Factorial</h2>
    <form method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" required min="0">
        <label for="operacion">Seleccione la operación:</label>
        <select id="operacion" name="operacion">
            <option value="fibonacci">Sucesión de Fibonacci</option>
            <option value="factorial">Factorial</option>
        </select>
        <button type="submit">Calcular</button>
    </form>
    
    <?php if (isset($resultado)): ?>
        <h3>Resultado: <?php echo htmlspecialchars($resultado); ?></h3>
    <?php endif; ?>
</body>
</html>