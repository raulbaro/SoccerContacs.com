<?php 
require_once('../modelo/DB.php');
session_start();
$email = $_GET['email'];


if($_POST['datos']){
    $nombreU = $_POST['nombre'];
    $apellido1U = $_POST['apellido1'];
    $apellido2U = $_POST['apellido2'];
    $tlf1U = $_POST['telefono'];
    $tlf2U = $_POST['telefono2'];
    $emailU = $_POST['email'];
    $direccionU = $_POST['direccion'];
    $estadoCivilU = $_POST['estadoCivil'];
    $numeroHijosU = $_POST['numHijos'];
    $fotoU = basename($_FILES['fotoPerfil']['name']);
    $estudiosU = $_POST['estudios'];
    $fechaNacimientoU = $_POST['fechaNac'];
    $descripcionPersonalU = $_POST['descripcion'];
    $direccion_idDireccion = 1;
    $nombreDeportivo = $_POST['nombreD'];

    $tipoDeImagen = pathinfo($fotoU, PATHINFO_EXTENSION); 
    $fotoPerfilTemporal = $_FILES['fotoPerfil']['tmp_name']; 
    $fotoPerfilFinal = addslashes(file_get_contents($fotoPerfilTemporal)); 
   
       
 
  DB::nuevoDatosUsuario($idU,$nombreU,$apellido1U,$apellido2U,$tlf1U,$tlf2U,$emailU,$direccionU,$estadoCivilU,$numeroHijosU,$fotoPerfilFinal,$estudiosU,$fechaNacimientoU,$descripcionPersonalU,$direccion_idDireccion,$nombreDeportivo);
  echo '<script type="text/javascript"> document.location ="login.php" </script>';

        
    }



include_once("../vista/nuevoUsuario.php");
?>