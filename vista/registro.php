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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="./css/registro.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Registrar</h3>
              <form action="../controlador/registro.php" method="POST">
                <div class="form-label-group">
					<input name="name" type="text" class="form-control" id="name"  placeholder="Enter name">
					<label for="name">Nombre</label>
						
                </div>
				<div class="form-label-group">
				<input type="email" name="email" class="form-control" id="email" a placeholder="Enter email">
					<label for="email">Email address</label>
						
					</div>
                <div class="form-label-group">
				<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>
				<div class="alert alert-danger" role="alert">
                  <?= $error?>
                </div>
        
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="enviar">Entrar</button>
                <div class="text-center">
				<div class="text-center">
                  <a href="login.php">Ya soy usuario</a>
				</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
