<?php 
require_once('../modelo/Perfil.php');
require_once('../modelo/DB.php');
session_start();

if(!$_SESSION['email']){
    header("Location: https://testapp.soccercontacts.com/controlador/login.php?log=Accede%20a%20tu%20cuenta%20para%20ver%20los%20perfiles");
}

$idPerfil = $_GET['idPerfil'];
$datosUsuario = DB::obtenerDatosUsuarioPorPerfil($idPerfil);
//var_dump($datosUsuario);
$direccionUsuario = DB::obtenerDireccionUsuario($datosUsuario['direccion_idDireccion']);
$paisUsuario = DB::obtenerPaisUsuario($direccionUsuario['pais_idPais']);



$perfil = Perfil::obtenerPerfilEspecifico($idPerfil);
$usuario=Perfil::obtenerUsuarioDelPerfil($perfil[0]->usuarioPerfilJugador);
$foto=Perfil::obtenerFotosPerfil($idPerfil);

//var_dump($perfil[0]->peso);
include_once('../vista/verServicio.php');
?>