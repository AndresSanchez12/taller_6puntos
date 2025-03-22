<?php
class Conjunto {
    private $A;
    private $B;

    public function __construct($A, $B) {
        $this->A = array_unique($A); // Eliminamos duplicados
        $this->B = array_unique($B);
    }

    // Unión de A y B (elementos únicos de ambos conjuntos)
    public function union() {
        return array_unique(array_merge($this->A, $this->B));
    }

    // Intersección de A y B (elementos comunes en ambos conjuntos)
    public function interseccion() {
        return array_values(array_intersect($this->A, $this->B));
    }

    // Diferencia A - B (elementos en A que no están en B)
    public function diferenciaAB() {
        return array_values(array_diff($this->A, $this->B));
    }

    // Diferencia B - A (elementos en B que no están en A)
    public function diferenciaBA() {
        return array_values(array_diff($this->B, $this->A));
    }
}
?>
