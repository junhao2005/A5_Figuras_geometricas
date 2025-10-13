<?php
require_once 'FiguraGeometrica.php';

class Circulo extends FiguraGeometrica {

    // Constructor con todos los atributos
    public function __construct($tipoFigura, $radio) {
        parent::__construct($tipoFigura, $radio);
    }

    // Destructor
    public function __destruct() {
        // Destructor vacío
    }

    // Método para calcular el área del círculo
    public function calcularArea() {
        return M_PI * $this->lado1 * $this->lado1; // π * r²
    }

    // Método para calcular el perímetro (circunferencia)
    public function calcularPerimetro() {
        return 2 * M_PI * $this->lado1; // 2πr
    }

    // Método mágico __toString()
    public function __toString() {
        return "Figura: {$this->tipoFigura}<br>" .
               "Radio: {$this->lado1}<br>" .
               "Área: " . round($this->calcularArea(), 2) . "<br>" .
               "Perímetro: " . round($this->calcularPerimetro(), 2) . "<br>";
    }
}
?>
