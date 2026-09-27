<?php
require_once __DIR__ . '/Flor.php';

class Flor extends Planta{
    private $color_p;
    private $cantidad_prom_p;
    private $color_pistilo;
    private $variedad_flor;
    private $estacion;

    public function __construct($nombre, $alturaTallo, $hojas, $clima, $color_p, $cantidad_prom_p, $color_pistilo, $variedad_flor, $estacion){
        parent::__construct($nombre, $alturaTallo, $hojas, $clima);

        $this->color_p = $color_p;
        $this->cantidad_prom_p = $cantidad_prom_p;
        $this->color_pistilo = $color_pistilo;
        $this->variedad_flor = $variedad_flor;
        $this->estacion = $estacion;
    }

    public function getColor_p(){
        return $this->color_p;
    }

    public function setCantidad_prom_p($cantidad_prom_p){
        $this->cantidad_prom_p = $cantidad_prom_p;
    }

    public function getColor_pistilo(){
        return $this->color_pistilo;
    }

    public function setVariedad_flor($variedad_flor){
        $this->variedad_flor = $variedad_flor;
    }

    public function getEstacion(){
        return $this->estacion;
    }

    public function saludar1(){
        return "Hola, soy una flor";
    }
}