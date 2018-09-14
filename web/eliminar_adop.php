<?php

include_once '../controlador/DaoAdoptante.php';
$dao= new DaoAdoptante();
$rut=$_GET["rut"];
$resp=$dao->Eliminar($rut);
//redireccionar
header("location:listar_adop.php");