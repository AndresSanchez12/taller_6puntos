<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construcción de Árbol Binario</title>
    <link rel="stylesheet" href="punto6css.css">
</head>
<body>
    <h2>Construcción de Árbol Binario</h2>
    <form method="POST">
        <input type="text" name="preorden" placeholder="Preorden (ej: A,B,D,E,C)">
        <input type="text" name="inorden" placeholder="Inorden (ej: D,B,E,A,C)">
        <button type="submit">Construir Árbol</button>
    </form>
    
    <?php
    class Nodo {
        public $valor;
        public $izquierda;
        public $derecha;

        public function __construct($valor) {
            $this->valor = $valor;
            $this->izquierda = null;
            $this->derecha = null;
        }
    }

    class ArbolBinario {
        private $indicePreorden;
        private $nodos;

        public function __construct() {
            $this->indicePreorden = 0;
            $this->nodos = [];
        }

        public function construirDesdePreInorden($preorden, $inorden) {
            $this->indicePreorden = 0;
            return $this->construir($preorden, $inorden, 0, count($inorden) - 1);
        }

        private function construir($preorden, $inorden, $inicio, $fin) {
            if ($inicio > $fin) return null;

            $valor = $preorden[$this->indicePreorden++];
            $nodo = new Nodo($valor);
            $this->nodos[] = $nodo;

            if ($inicio == $fin) return $nodo;

            $indiceInorden = array_search($valor, $inorden);

            $nodo->izquierda = $this->construir($preorden, $inorden, $inicio, $indiceInorden - 1);
            $nodo->derecha = $this->construir($preorden, $inorden, $indiceInorden + 1, $fin);

            return $nodo;
        }

        public function generarHTML($nodo) {
            if (!$nodo) return "";
            $izquierda = $this->generarHTML($nodo->izquierda);
            $derecha = $this->generarHTML($nodo->derecha);
            return "<div class='node'>
                        <div class='value'>{$nodo->valor}</div>
                        <div class='children'>
                            <div>{$izquierda}</div>
                            <div>{$derecha}</div>
                        </div>
                    </div>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preorden = explode(",", strtoupper(trim($_POST["preorden"])));
        $inorden = explode(",", strtoupper(trim($_POST["inorden"])));

        if (!empty($preorden) && !empty($inorden)) {
            $arbol = new ArbolBinario();
            $raiz = $arbol->construirDesdePreInorden($preorden, $inorden);
            echo "<div class='tree'>" . $arbol->generarHTML($raiz) . "</div>";
        }
    }
    ?>
</body>
</html>
