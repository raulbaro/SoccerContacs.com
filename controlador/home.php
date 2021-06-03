<?php 

session_start();
require_once('../modelo/DB.php');
require_once('../modelo/Perfil.php');
$email = $_SESSION['email'];

$datosUsuario = DB::obtenerDatosUsuario($email);
$direccionUsuario = DB::obtenerDireccionUsuario($datosUsuario['direccion_idDireccion']);
$paisUsuario = DB::obtenerPaisUsuario($direccionUsuario['pais_idPais']);

$cantidadPerfilesTotales = count(Perfil::obtenerTodosPerfiles());
$perfil = Perfil::obtenerTodosPerfiles();



include_once('../vista/home.php');

?>