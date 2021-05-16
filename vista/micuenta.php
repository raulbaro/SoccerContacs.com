<!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="utf-8">
            <title>Mi Cuenta</title>
            <link href="./css/sidebar.css" rel="stylesheet"/>
            <link href="./css/micuenta.css" rel="stylesheet"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <?php include('../includes/navbar.html') ?>

            <div class="container">
              <div class="p-3 text-center ">
                <h1 class="mb-3">Mi Cuenta</h1>
   
              </div>
              <div class="main-body">
                    <div class="row gutters-sm">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                      
                              <?= '<img src="data:image/jpeg;base64,'.base64_encode( $datosUsuario['fotoU'] ).' " class="rounded-circle" width="150"/>'; ?>
                              <div class="mt-3">
                                <h4>   <?php
                                  $nombre =   $datosUsuario['nombreU']." ".$datosUsuario['apellido1U']." ".$datosUsuario['apellido2U'];
                                  echo $nombre;
                                ?></h4>
                                <p class="text-secondary mb-1">   <?= $datosUsuario['fechaNacimientoU']; ?></p>
                                <p class="text-muted font-size-sm"> <h6 class="mb-0">Descripcion</h6> <?= $datosUsuario['descripcionPersonalU']; ?></p>
                                <p class="text-muted font-size-sm"> <h6 class="mb-0">Direccion</h6> <?= $direccionUsuario['calle'].", ".$direccionUsuario['localidad'].", ".$paisUsuario['nombreP']; ?></p>
                                <a href="../controlador/nuevoperfil.php" class="btn btn-primary stretched-link">Crear Perfil</a>
                                <a href="perfiles.php" class="btn btn-primary stretched-link">Ver Perfil</a>
                                <!--<button class="btn btn-outline-primary">Message</button>-->
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
        </body>
    </html>