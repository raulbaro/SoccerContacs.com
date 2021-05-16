<?php 
error_reporting(0);

session_start();
require_once('../modelo/DB.php');
require_once('../modelo/Perfil.php');
$email = $_SESSION['email'];

$datosUsuario = Usuario::obtenerDatos();
$cantidadPerfilesTotales = count(Perfil::obtenerTodosPerfiles());
$perfil = Perfil::obtenerTodosPerfiles();

include_once('../vista/home.php');

?>