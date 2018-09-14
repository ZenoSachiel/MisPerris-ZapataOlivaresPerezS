<?php

class conexion {

    private $server = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $base = "misperris";
    private $cone;

    function __construct() {
        try {
            $this->cone = mysqli_connect($this->server, $this->usuario, $this->pass, $this->base);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    //insert, delete ,update
    public function SqlOperacion($sql) {
        try {
            mysqli_query($this->cone, $sql);
            return mysqli_affected_rows($this->cone);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    //select
    public function SqlSeleccion($sql) {
        try {
            $reg = mysqli_query($this->cone, $sql);
            return $reg;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
