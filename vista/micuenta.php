<!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="utf-8">
            <title>Mi Cuenta</title>
            <link href="../vista/css/sidebar.css" rel="stylesheet"/>
            <link href="../vista/css/micuenta.css" rel="stylesheet"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            
            
 
        </head>
        <body>
            <?php include('../includes/navbar.php') ?>

            <div class="container">
              <div class="p-3 text-center ">
                <h1 class="mb-3">Mi Cuenta</h1>
               <button type="button" data-toggle="modal" data-target="#cambioPassword""><span class="iconify" data-icon="bi:key" data-inline="false" data-height="35px" data-width="35px" style="color: grey;"></span></button>
               <?php 
                if($_GET){
                  $msg = $_GET['ok'];
                  $error = $_GET['error'];
                  echo '<p>'.$msg.'</p>';
                  echo '<p>'.$error.'</p>';
                }
               ?>
              </div>
              
              <div class="modal fade" id="cambioPassword" tabindex="-1" role="dialog" aria-labelledby="cambioPassword" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="" method="POST">
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Contraseña Actual:</label>
                          <input type="password" class="form-control" id="oldPassowrd" name="oldPassword" required>
                        </div>
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Contraseña Nueva:</label>
                          <input type="password" class="form-control" id="newPassowrd" name="newPassword" required>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" name="submit" class="btn btn-primary">Cambiar</button>
                      </div>
                      </form>
                    </div>

                  </div>
                </div>
              </div>
             
              <div class="main-body">
                    <div class="row gutters-sm">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                      
                              <?php // '<img src="data:image/jpeg;base64,'.base64_encode( $datosUsuario['fotoU'] ).' " class="rounded-circle" width="150"/>'; ?>
                              <img src="https://www.dzoom.org.es/wp-content/uploads/2020/02/portada-foto-perfil-redes-sociales-consejos.jpg" class="rounded-circle" width="150px"/>
                              <div class="mt-3">
                                <h4>   <?php
                                  $nombre =   $datosUsuario['nombreU']." ".$datosUsuario['apellido1U']." ".$datosUsuario['apellido2U'];
                                  echo $nombre;
                                ?></h4>
                                <p class="text-secondary mb-1">   <?= $datosUsuario['fechaNacimientoU']; ?></p>
                                <p class="text-muted font-size-sm"> <h6 class="mb-0">Descripcion</h6> <?= $datosUsuario['descripcionPersonalU']; ?></p>
                                <p class="text-muted font-size-sm"> <h6 class="mb-0">Direccion</h6> <?= $direccionUsuario['calle'].", ".$direccionUsuario['localidad'].", ".$paisUsuario['nombreP']; ?></p>
                                <a href="../controlador/perfiles.php" class="btn btn-primary">Ver Perfiles</a>
                                <?php  if($cantidad['count(idPerfil)']<=4){  ?>
                                <a href="../controlador/nuevoperfil.php" class="btn btn-primary">Crear Perfil</a>
                           
                                <?php }else{?>
                                    <a class="btn btn-secondary disabled">Crear Perfil</a>
                                    <p style="color:red;">Tienes el maximo de perfiles permitidos</p>
                                <?php }?>
              
                         
                              </div>
                            </div>
                          </div>
                        </div>
                      
                      </div>
                      <div class="col-md-8">
                        <div class="card ">
                          <div class="card-body">
                          
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?= $datosUsuario['emailU']; ?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Telefono 1</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?= $datosUsuario['tlf1U']; ?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Telefono 2</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?= $datosUsuario['tlf1U']; ?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Direccion</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?= $datosUsuario['direccionU']; ?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Estado Civil</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?= $datosUsuario['estadoCivilU']; ?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Numero de Hijos</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?= $datosUsuario['numeroHijosU']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Estudios</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?= $datosUsuario['estudiosU']; ?>
                                </div>
                            </div>
                          </div>
                        
                        </div>

                        
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <?php include('../includes/footer.html') ?>
        </body>
    </html>