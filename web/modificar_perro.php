<?php

include_once '../controlador/DaoPerro.php';
include_once '../modelo/Perro.php';

$id=$_POST["txtId"];
$nombre=$_POST["txtNombre"];
$raza=$_POST["txtRaza"];
$edad=$_POST["txtEdad"];
$vac=$_POST["cboVacunas"];

$perro=new Perro();
$perro->setId($id);
$perro->setNombre($nombre);
$perro->setRaza($raza);
$perro->setEdad($edad);
$perro->setVac($vac);

$dao=new DaoPerro();
$filas_afectadas=$dao->Modificar($perro);
if ($filas_afectadas>0) {
    echo 'Modifico';
} else {
    echo 'No Modifico';
}