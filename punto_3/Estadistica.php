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
        $valores = array_count_values($this->numeros);
        $maxFrecuencia = max($valores);
        $moda = [];

        foreach ($valores as $num => $frecuencia) {
            if ($frecuencia == $maxFrecuencia) {
                $moda[] = $num;
            }
        }

        return count($moda) == count($valores) ? "No hay moda" : implode(", ", $moda);
    }
}
?>
