<?php
session_start();
require_once('../modelo/DB.php');
require_once('../modelo/Usuario.php');
//header("Location: ../vista/micuenta.php");
$email = $_SESSION['email'];

$datosUsuario = DB::obtenerDatosUsuario($email);
$direccionUsuario = DB::obtenerDireccionUsuario($datosUsuario['direccion_idDireccion']);
$paisUsuario = DB::obtenerPaisUsuario($direccionUsuario['pais_idPais']);

include_once('../vista/micuenta.php');


?>