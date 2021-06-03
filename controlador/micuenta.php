<?php
session_start();
require_once('../modelo/DB.php');
require_once('../modelo/Usuario.php');
//header("Location: ../vista/micuenta.php");
$email = $_SESSION['email'];

$cantidad=Usuario::obtenerCantidadPerfiles($email);

$datosUsuario = DB::obtenerDatosUsuario($email);
$direccionUsuario = DB::obtenerDireccionUsuario($datosUsuario['direccion_idDireccion']);
$paisUsuario = DB::obtenerPaisUsuario($direccionUsuario['pais_idPais']);


$foto=Perfil::obtenerFotosPerfil($idPerfil);

if($_POST){

    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];

    if(Usuario::comprobarPassword($email,$oldPassword)){
        Usuario::cambiarPassword($email,$newPassword);
        echo "<script type='text/javascript'> document.location = 'micuenta.php?ok=Los%20datos%20proporcionado%20han%20sido%20actualizados'; </script>";
    }else{
        echo "<script type='text/javascript'> document.location = ' micuenta.php?error=Los%20datos%20proporcionado%20son%20incorrectos'; </script>";
    }
  

}else {
    
}

include_once('../vista/micuenta.php');


?>