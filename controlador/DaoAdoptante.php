<?php

include_once 'conexion.php';
include_once '../modelo/Adoptante.php';
class DaoAdoptante {

    private $cone;

    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function Grabar($adoptante) {
        try {
            $sql="insert into Adoptante "
                    . "values(@rut,'@no','@fn','@em',@tel,'@reg','@ciu','@tviv')";
            $sql= str_replace("@rut", $adoptante->getRut(), $sql);
            $sql= str_replace("@no", $adoptante->getNombre(), $sql);
            $sql= str_replace("@fn", $adoptante->getFecn(), $sql);
            $sql= str_replace("@em", $adoptante->getEmail(), $sql);
            $sql= str_replace("@tel", $adoptante->getTel(), $sql);            
            $sql= str_replace("@reg", $adoptante->getReg(), $sql);            
            $sql= str_replace("@ciu", $adoptante->getCiu(), $sql);            
            $sql= str_replace("@tviv", $adoptante->getTviv(), $sql);            
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
        
        public function Listar() {
            try {
                $sql="select * from Adoptante";
                return $this->cone->SqlSeleccion($sql);
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
                }
                
        public function Eliminar($rut) {
        try {
            $sql="delete from Adoptante where rut='$rut'";
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }    

  public function Buscar($rut) {
        try {
            $sql="select * from Adoptante where rut='$rut'";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }  
        
         public function Modificar($adoptante) {
        try {
            $sql="update Adoptante set rut='@rut',nombre='@no',fechn='@fn',email='@em',tel=@tel,reg='@reg',ciu='@ciu',tviv='@tviv'"
                    . " where rut='@rut'";
            $sql= str_replace("@rut", $adoptante->getRut(), $sql);
            $sql= str_replace("@no", $adoptante->getNombre(), $sql);
            $sql= str_replace("@fn", $adoptante->getFecn(), $sql);
            $sql= str_replace("@em", $adoptante->getEmail(), $sql);
            $sql= str_replace("@tel", $adoptante->getTel(), $sql);            
            $sql= str_replace("@reg", $adoptante->getReg(), $sql);            
            $sql= str_replace("@ciu", $adoptante->getCiu(), $sql);            
            $sql= str_replace("@tviv", $adoptante->getTviv(), $sql);            
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
}