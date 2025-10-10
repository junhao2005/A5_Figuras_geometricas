<?php

require_once 'FiguraGeometrica.php';        

class Triangulo extends FiguraGeometrica {
    private $lado2;
    private $lado3;

    public function __construct($tipoFigura, $lado1, $lado2, $lado3) {
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }  

// Genera el constructor con todos sus atributos y el destructor
    public function __destruct() { 

    }

// getters y setters de Lado2 y Lado3

    public function getLado2() {
        return $this->lado2;
    }
    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function getLado3() {
        return $this->lado3;
    }
    public function setLado3($lado3) {
        $this->lado3 = $lado3;
    }

//Define el método calcularArea() que devuelva el área del triángulo
    public function calcularArea() {
        $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2; // semi-perímetro
        return sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3)); // fórmula de Herón
    }   

//Añade un método calcularPerimetro() para calcular el perímetro del triángulo.
    public function calcularPerimetro() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

// Añade el método mágico __toString() para devolver la descripción de la figura
    public function __toString() {
        return "Figura: " . $this->tipoFigura . ", Lado1: " . $this->lado1 . ", Lado2: " . $this->lado2 . ", Lado3: " . $this->lado3 . ", Área: " . $this->calcularArea() . ", Perímetro: " . $this->calcularPerimetro();
    }
}
    

?>
   