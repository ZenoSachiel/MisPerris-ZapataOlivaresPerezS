<?php

include_once '../controlador/DaoAdoptante.php';
include_once '../modelo/Adoptante.php';

$rut=$_POST["txtRut"];
$nombre=$_POST["txtNombre"];
$fecn=$_POST["txtFecn"];
$email=$_POST["txtEmail"];
$tel=$_POST["txtTel"];
$reg=$_POST["cboReg"];
$ciu=$_POST["cboCiu"];
$tviv=$_POST["cboTviv"];

$adoptante=new Adoptante();
$adoptante->setRut($rut);
$adoptante->setNombre($nombre);
$adoptante->setFecn($fecn);
$adoptante->setEmail($email);
$adoptante->setTel($tel);
$adoptante->setReg($reg);
$adoptante->setCiu($ciu);
$adoptante->setTviv($tviv);

$dao=new DaoAdoptante();
$filas_afectadas=$dao->Grabar($adoptante);
if ($filas_afectadas>0) {
    header("location: listar_adop.php");
} else {
    echo 'No Grabo';
}