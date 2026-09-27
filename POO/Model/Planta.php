<?php

class Planta{
    private $nombre;
    private $alturaTallo;
    private $hojas;
    private $clima;

    public function __construct($nombre, $alturaTallo, $hojas, $clima){

        $this->nombre = $nombre;
        $this->alturaTallo = $alturaTallo;
        $this->hojas = $hojas;
        $this->clima = $clima;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getAlturaTallo(){
        return $this->alturaTallo;
    }

    public function getHojas(){
        return $this->hojas;
    }

    public function getClima(){
        return $this->clima;
    }
}