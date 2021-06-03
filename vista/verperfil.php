<!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="utf-8">
            <link href="../vista/css/sidebar.css" rel="stylesheet"/>
            <link href="../vista/css/home.css" rel="stylesheet"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <title>Perfil </title>
        </head>
        <body>
            <?php include('../includes/navbar.html');?>
            <?=  $datosPerfil['nombre']?>
            <?php include('../includes/footer.html') ?>
        </body>
    </html>