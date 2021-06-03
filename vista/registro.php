<?php
	if($_GET){
		$error=$_GET['error'];
	
	}else {
		$error="";
	}
    
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Registro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="../vista/css/registro.css" rel="stylesheet" type="text/css">
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
              <h3 class="login-heading mb-4">Registro</h3>
              <form action="../controlador/registro.php" method="POST">
                <div class="form-label-group">
                  <input name="name" type="text" class="form-control" id="name"  placeholder="Enter name" required>
                  <label for="name">Nombre</label>  
                </div>
                <div class="form-label-group">
                  <input type="email" name="email" class="form-control" id="email" a placeholder="Enter email" required>
                  <label for="email">Email</label>
                </div>
                <div class="form-label-group">
				          <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>
                <?php if($error){
                  echo "<div class='alert alert-danger' role='alert'>".$error."</div>";
                  }
                ?>
                
                <div class="text-center">
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="enviar">Registrarse</button>
               
            </form>   
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 enlace"><a href="login.php">Ya soy usuario</a></button></div>
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
