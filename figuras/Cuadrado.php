<?php
require_once 'FiguraGeometrica.php';

class Cuadrado extends FiguraGeometrica {

    // Constructor con todos los atributos
    public function __construct($tipoFigura, $lado1) {
        parent::__construct($tipoFigura, $lado1);
    }

    // Destructor
    public function __destruct() { }

    // Método para calcular el área del cuadrado
    public function calcularArea() {
        return $this->lado1 * $this->lado1;
    }

    // Método para calcular el perímetro del cuadrado
    public function calcularPerimetro() {
        return 4 * $this->lado1;
    }

    // Método mágico __toString()
    public function __toString() {
        return "Figura: {$this->tipoFigura}<br>" .
               "Lado: {$this->lado1}<br>" .
               "Área: " . $this->calcularArea() . "<br>" .
               "Perímetro: " . $this->calcularPerimetro() . "<br>";
    }
}
?>
