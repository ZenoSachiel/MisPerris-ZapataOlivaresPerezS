<?php

class Perro {
    //estos son mis atributos
    private $id;
    private $nombre;
    private $raza;
    private $edad;
    private $vac;
    
    function __construct(){

    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getRaza() {
        return $this->raza;
    }

    function getEdad() {
        return $this->edad;
    }

    function getVac() {
        return $this->vac;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setRaza($raza) {
        $this->raza = $raza;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setVac($vac) {
        $this->vac = $vac;
    }

    
}
