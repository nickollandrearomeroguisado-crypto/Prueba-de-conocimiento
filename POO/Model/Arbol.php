<?php
require_once __DIR__ . '/Planta.php';

class Arbol extends Planta{
    private $variedad;
    private $tipo_t;
    private $radio_t;
    private $color;
    private $tipoHojas;

    public function __construct($nombre, $alturaTallo, $hojas, $clima, $variedad, $tipo_t, $radio_t, $color, $tipoHojas){
        parent::__construct($nombre, $alturaTallo, $hojas, $clima);

        $this->variedad = $variedad;
        $this->tipo_t = $tipo_t;
        $this->radio_t = $radio_t;
        $this->color = $color;
        $this->tipoHojas = $tipoHojas;
    }

    public function getVariedad(){
        return $this->variedad;
    }

    public function setTipo_t($tipo_t){
        $this->tipo_t = $tipo_t;
    }

    public function getRadio_t(){
        return $this->radio_t;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getTipoHojas(){
        return $this->tipoHojas;
    }

    public function saludar(){
        return "Hola, soy un árbol";
    }

    
}
