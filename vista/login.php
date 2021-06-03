<?php
	if($_GET['error']){
		$error=$_GET['error'];
	}else {
    $error="";
	}
    if($_GET['pass']){
		$pass=$_GET['pass'];
	}else {
    $pass="";
	}
    
    
    
?>
<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="../vista/css/login.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <img src="../assets/img/logoG.png" class="logoGrande">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Bienvenido</h3>
              <form action="../controlador/login.php" method="POST">
                <div class="form-label-group mb-7">
                  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                  <label for="inputEmail">Email</label>
                </div>
                <div class="form-label-group">
                  <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>
                <?php if($error){
                  echo "<div class='alert alert-danger' role='alert'>".$error.'</div>';
                    }else{}
                if($pass){
                    echo '<script>alert("Revisa tu correo electronio para seguir con el cambio de contraseña")</script>';
                }
                ?>
                <div class="text-center">
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="enviar">Accede</button>
                
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 "><a href="../controlador/registro.php" >Regístrate</a></button>
                </div>
              </form>
              <div class="password">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#password">
                ¿Olvidaste tu contraseña?
              </button>
              
              </div>
             
              <!-- Button trigger modal -->


              <!-- Modal -->
              <div class="modal fade" id="password" tabindex="-1" aria-labelledby="password" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">¿Olvidaste tu contraseña?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div>
                      <form action="../controlador/olvidarContraseña.php" method="POST" class="form">
                          <input name="emailPass" class="emailPass" type="email" id="emailPasss"  placeholder="Email" required autofocus>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary" name="formpassword">Enviar</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        
      </div>
   
     
    </div>
  </div>
</div>

</body>
</html>
