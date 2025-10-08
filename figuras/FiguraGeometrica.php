<?php

abstract class FiguraGeometrica {
    protected $tipoFigura;
    protected $lado1;

    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    // Genera el constructor con todos sus atributos y el destructor
    public function __destruct() {}


    // getters y setters de TipoFigura y Lado1  
    public function getTipoFigura() {
        return $this->tipoFigura;
    }
    public function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }

    // getters y setters de Lado1  
    public function getLado1() {
        return $this->lado1;
    }
    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    // Métodos abstractos para calcular el área  
    abstract public function calcularArea();

    
}
    
   


?>