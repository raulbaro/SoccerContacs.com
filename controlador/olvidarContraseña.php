<?php 
session_start();
require_once('../modelo/DB.php');
require_once('../modelo/Perfil.php');
require_once('../modelo/Usuario.php');
$email = $_SESSION['email'];



if($_POST['btnSend']){

    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $email = $_POST['email'];
    
    Usuario::cambiarPassword($email,$newPassword);
    echo "<script type='text/javascript'> document.location = 'olvidarContraseña.php?ok=Los%20datos%20proporcionado%20han%20sido%20actualizados'; </script>";
    echo "<script type='text/javascript'> document.location = ' olvidarContraseña.php?error=Los%20datos%20proporcionado%20son%20incorrectos'; </script>";
   
  
    
}else {
    
}
if (isset($_POST['formpassword'])) {


    //$email_to =$_POST['emailPass'];
    $email_to ="raulbg150497@gmail.com"; 
    $email_subject = "Recuperacion de Contraseña";

  


    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message = "¡Hola!\n";
    $email_message .= "Hemos visto que quieres decirle adiós a tu antigua contraseña\n";
    $email_message .= "Si nos has pedido cambiar tu contraseña, la puedes modificar clicando a continuación:\n\n";
    $email_message .= "Si nos has pedido cambiar tu contraseña, la puedes modificar clicando a continuación:\n\n";
    $email_message .= "https://testapp.soccercontacts.com/controlador/olvidarContraseña.php \n";
    $email_message .= "Si has llegado hasta aquí sin habernos pedido el cambio, olvida este mail. Tus datos de acceso siguen siendo los de siempre";
    $email_message .= "Para cualquier pregunta, escríbenos a info@soccercontacts.com\n";
    $email_message .= "¡Gracias y hasta pronto!";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
      

    @mail($email_to, $email_subject, $email_message, $headers);
    header("Location: https://testapp.soccercontacts.com/controlador/login.php?pass=Revisa%20tu%20correo%20electronico");
}else {
    include_once("../vista/olvidarContraseña.php");
}




?>