<?php
require_once('../modelo/DB.php');


// Comprobamos si ya se ha enviado el formulario
if (isset($_POST['enviar'])) {
    var_dump($_POST['email']);
    var_dump(($_POST['password']));
    if (empty($_POST['email']) || empty($_POST['password'])) 
        echo "error";
    else {
        // Comprobamos las credenciales con la base de datos
        if (DB::verificarUsuario($_POST['email'], $_POST['password'])) {
            session_start();
            $_SESSION['email']=$_POST['email'];
            header("Location: ../vista/home.php");                    
        }
        else {
           header("Location: ../vista/login.php?error=email%20o%20contraseña%20incorrecta");
        }
    }
}



?>
