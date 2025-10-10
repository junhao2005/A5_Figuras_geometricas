<?php

require_once 'FiguraGeometrica.php';        

class Rectangulo extends FiguraGeometrica {
    protected $lado2;

    //Genera el constructor con todos sus atributos y el destructor.

    public function __construct($lado1, $lado2) {
        parent::__construct("Rectangulo", $lado1);
        $this->lado2 = $lado2;
    }


    public function __destruct() { }

    // Implementa los métodos getters y setters para el atributo.

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    // Define el método calcularArea() que devuelva el área del rectángulo.
    public function calcularArea() {
        return $this->lado1 * $this->lado2;
    }

    //Añade un método calcularPerimetro() para calcular el perímetro del rectángulo.
    public function calcularPerimetro() {
        return 2 * ($this->lado1 + $this->lado2);
    }

    // Añade el método mágico __toString() para devolver la descripción de la figura.

    public function __toString() {
        return "Figura: {$this->tipoFigura}<br>" .
               "Lado 1: {$this->lado1}<br>" .
               "Lado 2: {$this->lado2}<br>" .
               "Área: " . $this->calcularArea() . "<br>" .
               "Perímetro: " . $this->calcularPerimetro() . "<br>";
    }

}








?>