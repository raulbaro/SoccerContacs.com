<?php 

if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@soccercontacts.com";
    $email_subject = "Nuevo contacto";

    function problem($error)
    {
        echo "Lo sentimos, pero se han encontrado uno o más errores con el formulario proporcionado. ";
        echo "Estos errores aparecen a continuación<br><br>";
        echo $error . "<br><br>";
        echo "Por favor, revisa si existe algún error e inténtalo de nuevo<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Subject']) ||
        !isset($_POST['Message']) 
    ) {
        problem('Lo sentimos, pero se han encontrado uno o más errores con el formulario proporcionado.');
    }

    $name = $_POST['name']; // required
    $email = $_POST['Email']; // required
    $asunto = $_POST['Subject']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'El correo electrónico proporcionado no es válido.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'El Nombre proporcionado no parece ser válido.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'El mensaje proporcionado no parece ser válido.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Datos del formulario:\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Nombre: " . clean_string($name) . "\n";
    $email_message .= "Correo electrónico: " . clean_string($email) . "\n";
    $email_message .= "Asunto: " . clean_string($asunto) . "\n";
    $email_message .= "Mensaje: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->
   


<?php
}

include_once('../vista/contactar.php');

if ($_POST){
    echo "<h4> Gracias por contactarnos. Nos pondremos en contacto contigo lo antes posible.</h4>";
}
?>


