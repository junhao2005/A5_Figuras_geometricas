<?php

abstract class FiguraGeometrica {
    protected $tipoFigura;
    protected $lado1;

    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    public function __destruct() {}

    // getters y setters de tipoFigura  
    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    public function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }

    // getters y setters de lado1  
    public function getLado1() {
        return $this->lado1;
    }

    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    // Método abstracto (las clases hijas lo implementan)
    abstract public function calcularArea();
}

?>
