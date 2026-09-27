<?php
require_once __DIR__ . '/Planta.php';

class Arbusto extends Planta{
    private $ancho_a;
    private $domestico;
    private $variedad_a;
    private $color_hojas;
    private $podar;

    public function __construct($nombre, $alturaTallo, $hojas, $clima, $ancho_a, $domestico, $variedad_a, $color_hojas, $podar){
        parent::__construct($nombre, $alturaTallo, $hojas, $clima);

        $this->ancho_a = $ancho_a;
        $this->domestico = $domestico;
        $this->variedad_a = $variedad_a;
        $this->color_hojas = $color_hojas;
        $this->podar = $podar;
    }

    public function getAncho_a(){
        return $this->ancho_a;
    }

    public function setDomestico($domestico){
        $this->domestico = $domestico;
    }

    public function getVariedad_a(){
        return $this->variedad_a;
    }

    public function setColor_hojas($color_hojas){
        $this->color_hojas = $color_hojas;
    }

    public function getPodar(){
        return $this->podar;
    }

    public function saludar2(){
        return "Hola, soy un arbusto";
    }
}
