<?php
class Conjunto {
    private $A;
    private $B;

    public function __construct($A, $B) {
        $this->A = array_unique($A);
        $this->B = array_unique($B);
    }
    public function union() {
        return array_unique(array_merge($this->A, $this->B));
    }
    public function interseccion() {
        return array_values(array_intersect($this->A, $this->B));
    }

    public function diferenciaAB() {
        return array_values(array_diff($this->A, $this->B));
    }
    public function diferenciaBA() {
        return array_values(array_diff($this->B, $this->A));
    }
}
?>
