<?php
class Estadistica {
    private $numeros;

    public function __construct($numeros) {
        $this->numeros = $numeros;
    }

    public function calcularPromedio() {
        return array_sum($this->numeros) / count($this->numeros);
    }

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

    public function calcularModa() {
        if (empty($this->numeros)) {
            return "No hay datos";
        }
    
        $numerosConvertidos = array_map('strval', $this->numeros);
        $valores = array_count_values($numerosConvertidos); 
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
        if (count($moda) == count($valores)) {
            return "No hay moda";
        }
    
        return implode(", ", $moda);
    }
    
}
?>
