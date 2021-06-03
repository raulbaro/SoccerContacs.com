<?php
require_once('../modelo/DB.php');

session_start();

// Comprobamos si ya se ha enviado el formulario
if (isset($_POST['enviar'])) {
 
    if (empty($_POST['email']) || empty($_POST['password'])) 
        echo "error";
    else {
        // Comprobamos las credenciales con la base de datos
        if (DB::verificarUsuario($_POST['email'], $_POST['password'])) {
           
            $_SESSION['email']=$_POST['email'];
            $_SESSION['sesion']=true;
            header("Location: home.php");
                         
        }
        else {
           header("Location: ../vista/login.php?error=los%20datos%20son%20incorrectos");
        }
    }
}else{
include_once("../vista/login.php");

}




?>
 
 