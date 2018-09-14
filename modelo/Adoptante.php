<?php

class Adoptante {
    //estos son mis atributos
    private $rut;
    private $nombre;
    private $fecn;
    private $email;
    private $tel;
    private $reg;
    private $ciu;
    private $tviv;
    
    function __construct() {
        
    }
    
    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFecn() {
        return $this->fecn;
    }

    function getEmail() {
        return $this->email;
    }

    function getTel() {
        return $this->tel;
    }

    function getReg() {
        return $this->reg;
    }

    function getCiu() {
        return $this->ciu;
    }

    function getTviv() {
        return $this->tviv;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFecn($fecn) {
        $this->fecn = $fecn;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setReg($reg) {
        $this->reg = $reg;
    }

    function setCiu($ciu) {
        $this->ciu = $ciu;
    }

    function setTviv($tviv) {
        $this->tviv = $tviv;
    }
    
}