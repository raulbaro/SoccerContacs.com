<?php
require_once('../modelo/DB.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);


if (isset($_POST['enviar'])) {
    if (empty($email) || empty($password) || empty($name)) {
        
        header("Location: ../controlador/registro.php?error=Revisa%20los%20datos%20introducidos");
    }else {
       
        // Comprobamos las credenciales con la base de datos
        if ((DB::comprobarUsuario($email,$password))==true) {
            header("Location: ../controlador/registro.php?error=El%20Usuario%20ya%20existe");
        }else {
            
           DB::nuevoUsuario($name,$email,$password);
           echo '<script type="text/javascript"> document.location ="nuevoUsuario.php?email='.$email.'" </script>';
           header("Location: ../controlador/nuevoUsuario.php");
        }
    }
}else{

    include_once("../vista/registro.php");
}



?>