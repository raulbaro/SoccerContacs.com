<?php
require_once('../modelo/Usuario.php');
require_once('../modelo/Perfil.php');
session_start();
$email = $_SESSION['email'];
$cantidad=Usuario::obtenerCantidadPerfiles($email);
//var_dump($cantidad);
$datosPerfil=[];


$perfiles=Usuario::obtenerDatosPerfiles($email);

include_once('../vista/perfiles.php');
?>