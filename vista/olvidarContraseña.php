<!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="utf-8">
            <link href="../vista/css/olvidarContraseña.css" rel="stylesheet"/>
            <title>Olvidar Contraseña</title>
        </head>
        <body>

            <section class="form_wrap">

                <section class="cantact_info">
                    <section class="info_title">
                        <span class="fa fa-user-circle"></span>
                        <h2>RECUPERA<br>TU CONTRASEÑA</h2>
                    </section>
                    <section class="info_items">
                        <p><span class="fa fa-envelope"></span>info@soccercontacts.com</p>
                        <p><span class="fa fa-mobile"></span><!-- Numero de atecion al cliente --></p>
                    </section>
                </section>

                <form action="" class="form_contact" method="POST">
                    <h2>Rellene los siguientes datos</h2>
                    <div class="user_info">
                        <label for="email">Email *</label>
                        <input type="email" namE="email" id="email" required>

                        <label for="password2">Contraseña Nueva</label>
                        <input type="password" name="newPassword" id="password2" required>


                        <input type="submit" class="btn-primary" value="Enviar" name="btnSend">
                    </div>
                </form>

            </section>

        </body>
    </html>