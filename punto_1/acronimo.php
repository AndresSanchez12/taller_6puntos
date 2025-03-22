<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function generarAcronimo($frase) {
        $frase = preg_replace("/[^a-zA-Z0-9\-\s]/", " ", $frase);
    
        $frase = str_replace([".", ",", "!", "?"], "", $frase);
        
        $frase = str_replace("-", " ", $frase);
        
        $palabras = explode(" ", $frase);
        $acronimo = "";
        foreach ($palabras as $palabra) {
            if ($palabra != "") { 
                $acronimo .= strtoupper(substr($palabra, 0, 1));
            }
        }
        return $acronimo;
    }
    
    $frase = $_POST["frase"];
    $resultado = generarAcronimo($frase);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Acrónimos</title>
    <link rel="stylesheet" href="../css.css">
</head>
<body>
    <h2>Generador de Acrónimos</h2>
    <form method="post">
        <label for="frase">Ingrese una frase:</label>
        <input type="text" id="frase" name="frase" required>
        <button type="submit">Generar Acrónimo</button>
    </form>
    
    <?php if (isset($resultado)): ?>
        <h3>Resultado: <?php echo htmlspecialchars($resultado); ?></h3>
    <?php endif; ?>
    <a href="../index.php">Volver</a>
</body>
</html>
