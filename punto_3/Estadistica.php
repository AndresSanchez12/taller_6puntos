<?php
class Estadistica {
    private $numeros;

    public function __construct($numeros) {
        $this->numeros = $numeros;
    }

    // Calcular el promedio
    public function calcularPromedio() {
        return array_sum($this->numeros) / count($this->numeros);
    }

    // Calcular la mediana
    public function calcularMediana() {
        sort($this->numeros);
        $n = count($this->numeros);
        $medio = floor($n / 2);

        if ($n % 2 == 0) {
            return ($this->numeros[$medio - 1] + $this->numeros[$medio]) / 2;
        } else {
            return $this->numeros[$medio];
        }
    }

    // Calcular la moda
    public function calcularModa() {
        if (empty($this->numeros)) {
            return "No hay datos";
        }
    
        // Convertimos todos los valores a cadenas para evitar el error
        $numerosConvertidos = array_map('strval', $this->numeros);
        $valores = array_count_values($numerosConvertidos); // Ahora no dará error
    
        if (empty($valores)) {
            return "No hay moda";
        }
    
        $maxFrecuencia = max($valores);
        $moda = [];
    
        foreach ($valores as $num => $frecuencia) {
            if ($frecuencia == $maxFrecuencia) {
                $moda[] = $num;
            }
        }
    
        // Si todos los números tienen la misma frecuencia, se considera sin moda
        if (count($moda) == count($valores)) {
            return "No hay moda";
        }
    
        return implode(", ", $moda);
    }
    
}
?>
