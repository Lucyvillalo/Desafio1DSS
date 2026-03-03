<?php
class Promedio {

    public function calcular($n1, $n2, $n3) {
        $prom = ($n1 + $n2 + $n3) / 3;

        if ($prom > 10 || $prom < 0) {
            throw new Exception("Error: Promedio fuera de rango");
        }

        return round($prom, 2);
    }
}