<?php

include_once '../controlador/DaoPerro.php';
$dao= new DaoPerro();
$id=$_GET["id"];
$resp=$dao->Eliminar($id);
//redireccionar
header("location:listar.php");