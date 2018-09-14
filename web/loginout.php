<?php
session_start();
unset($_SESSION["sesion"]);
header("location:login.php");

