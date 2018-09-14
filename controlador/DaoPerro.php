<?php

include_once 'conexion.php';
include_once '../modelo/Perro.php';
class DaoPerro {

    private $cone;

    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function Grabar($perro) {
        try {
            $sql="insert into Perrito "
                    . "values(@id,'@no','@ra',@ed,'@vac')";
            $sql= str_replace("@id", $perro->getId(), $sql);
            $sql= str_replace("@no", $perro->getNombre(), $sql);
            $sql= str_replace("@ra", $perro->getRaza(), $sql);
            $sql= str_replace("@ed", $perro->getEdad(), $sql);
            $sql= str_replace("@vac", $perro->getVac(), $sql);            
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
        
        public function Listar() {
            try {
                $sql="select * from Perrito";
                return $this->cone->SqlSeleccion($sql);
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
                }
                
    public function Eliminar($id) {
        try {
            $sql="delete from Perrito where id='$id'";
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }    

  public function Buscar($id) {
        try {
            $sql="select * from Perrito where id='$id'";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }  
        
         public function Modificar($perro) {
        try {
            $sql="update Perrito set nombre='@no', raza='@ra', edad=@ed, vac='@vac'"
                    . " where id='@id'";
            $sql= str_replace("@id", $perro->getId(), $sql);
            $sql= str_replace("@no", $perro->getNombre(), $sql);
            $sql= str_replace("@ra", $perro->getRaza(), $sql);
            $sql= str_replace("@ed", $perro->getEdad(), $sql);
            $sql= str_replace("@vac", $perro->getVac(), $sql); 
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
}
