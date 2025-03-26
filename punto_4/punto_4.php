<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones de Conjuntos</title>
    <link rel="stylesheet" href="../css.css">
</head>
<body>
<button class="volver" onclick="window.location.href='../index.php'">Volver</button>

    <h2>Calculadora de Conjuntos</h2>
    <form action="Conversion.php" method="post">
        <label for="conjuntoA">Ingrese los valores de A (separados por comas):</label><br>
        <input type="text" name="conjuntoA" required >
        <br><br>

        <label for="conjuntoB">Ingrese los valores de B (separados por comas):</label><br>
        <input type="text" name="conjuntoB" required >
        <br><br>

        <button class="resolver"type="submit">Calcular</button>
    </form>
    <br>

</body>
</html>
