<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulario de Contacto</title>
        <link href="../vista/css/sidebar.css" rel="stylesheet"/>
        <link href="../vista/css/contactar.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php include('../includes/navbar.php')?>


<div class="fcf-body">

    <div id="fcf-form">
    <h3 class="fcf-h3">Contacta</h3>

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="">
        
        <div class="fcf-form-group">
            <label for="name" class="fcf-label">Tu nombre</label>
            <div class="fcf-input-group">
                <input type="text" id="name" name="name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Email</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>
        
        <div class="fcf-form-group">
            <label for="EmailDest" class="fcf-label">Email Destinatario</label>
            <div class="fcf-input-group">
                <input type="email" id="EmailDest" name="EmailDest" class="fcf-form-control2" readonly  <?php $contacto = $_POST['contacto']; echo 'value='.$contacto; ?>>
            </div>
        </div>
        <div class="fcf-form-group">
            <label for="Subject" class="fcf-label">Asunto</label>
            <div class="fcf-input-group">
                <input type="text" id="Subject" name="Subject" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Tu mensaje</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Enviar Mensaje</button>
        </div>

        

    </form>
    </div>

</div>
<?php include('../includes/footer.html') ?>
</body>
</html>