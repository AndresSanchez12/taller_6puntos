<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Estadísticas</title>
    <link rel="stylesheet" href="../css.css">
</head>
<body>
<button class="volver" onclick="window.location.href='../index.php'">Volver</button>

    <h2>Calculadora de Promedio, Mediana y Moda</h2>

    <form action="Conversion.php" method="post">
        <label for="numeros">Ingrese los números separados por comas:</label><br>
        <input type="text" name="numeros" required>
        <br><br>
        <button class="resolver"type="submit">Calcular</button>
        <br><br>
    </form>


</body>
</html>
