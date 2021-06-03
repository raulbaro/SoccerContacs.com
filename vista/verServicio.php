<!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="utf-8">
            <link href="../vista/css/sidebar.css" rel="stylesheet"/>
            <link href="../vista/css/verServicio.css" rel="stylesheet"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <title>Perfil de Usuario</title>
        </head>
        <body>
            <?php include('../includes/navbar.php') ?>
                <div class="flex-container">
                    <div class="flex-item">
                        <div class="imagen-perfil">
                            <?php   
                            $imageData = base64_encode($foto['fotoPerfil']);
                            $src = 'data: '.mime_content_type($foto['fotoPerfil']).';base64,'.$imageData; ?>
                            
                             <img class="item-img"<?php echo '<img src="'.$src.'"/>';?> 
                        </div>
                        <div class="nombre-usuario">
                            <h5><?= $usuario['nombreU']." ".$usuario['apellido1U'];?></h5>
                        </div>
                        <div class="datos">
                            <span class="iconify" data-icon="logos:google-maps" data-inline="false" data-width="25" data-height="25"></span> <?= $direccionUsuario['calle'].", ".$direccionUsuario['localidad'].", ".$paisUsuario['nombreP']; ?><br/>
                            <span class="iconify" data-icon="emojione:birthday-cake" data-inline="false" data-width="25" data-height="25"></span> <?= $datosUsuario['fechaNacimientoU'] ?>
                            <form action="../controlador/mensajePerfil.php" method="post">
                            <input type="hidden" name="contacto" <?php echo 'value='.$datosUsuario['emailU'] ?>>
                            <button type="submit" name="send"><span class="iconify" data-icon="flat-ui:mail" data-inline="false"></span></button> Enviar Un Mensaje
                        </form>
                        </div>
                       
                        
                    </div>
                    <div class="flex-item">
                    <div class="tabbed">
                        <input name="tabbed" id="tabbed1" type="radio" checked>
                        <section>
                            <h1>
                            <label for="tabbed1">Perfil</label>
                            </h1>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Nombre: </td>
                                        <td><?= $perfil[0]->nombre ?></td>
                                    </tr>
                                    <tr>
                                        <td>Peso: </td>
                                        <td><?= $perfil[0]->peso ?></td>
                                    </tr>
                                    <tr>
                                        <td>Altura: </td>
                                        <td><?= $perfil[0]->altura ?></td>
                                    </tr>
                                    <tr>
                                        <td>Historial: </td>
                                        <td><?= $perfil[0]->historial ?></td>
                                    </tr>
                                    <tr>
                                        <td>Descripción: </td>
                                        <td><?= $perfil[0]->descripcion ?></td>
                                    </tr>
                                    <tr>
                                        <td>Lateralidad: </td>
                                        <td>
                                            <?php
                                                if($perfil[0]->lateralidad == "D"){
                                                    echo "DIESTRO";
                                                }elseif ($perfil[0]->lateralidad == "Z") {
                                                    echo "ZURDO";
                                                }else{
                                                    echo "AMBOS";
                                                }
                                                
                                            ?>
                                         </td>
                                    </tr>
                                    <tr>
                                        <td>Demarcación: </td>
                                        <td><?= $perfil[0]->demarcacionP ?></td>
                                    </tr>
                                    <tr>
                                        <td>Noticias: </td>
                                        <td><?= $perfil[0]->noticias ?></td>
                                    </tr>
                                    <tr>
                                        <td>Fin del Contrato: </td>
                                        <td><?= $perfil[0]->finContrato ?></td>
                                    </tr>
                                    <tr>
                                        <td>Representate: </td>
                                        <td><?= $perfil[0]->representante ?></td>
                                    </tr>
                                    <tr>
                                        <td>Valor Mercado: </td>
                                        <td><?= $perfil[0]->valorMercado ?></td>
                                    </tr>
                                    <tr>
                                        <td>Operaciones: </td>
                                        <td><?= $perfil[0]->operaciones ?></td>
                                    </tr>

                                </table>

                            </div>
                        </section>
                        <input name="tabbed" id="tabbed2" type="radio">
                        <section>
                            <h1>
                            <label for="tabbed2">Galeria</label>
                            </h1>
                            <div class="grid-container">
                                <div class="foto1"><img class="item-img"<?php echo '<img src="'.'data: '.mime_content_type($foto['foto2']).';base64,'.$imageData.'"/>';?> </div>
                                <div class="foto2"><img class="item-img"<?php echo '<img src="'.'data: '.mime_content_type($foto['foto3']).';base64,'.$imageData.'"/>';?> </div>
                                <div class="foto3"><img class="item-img"<?php echo '<img src="'.'data: '.mime_content_type($foto['foto4']).';base64,'.$imageData.'"/>';?> </div>
                                <div class="foto4"><img class="item-img"<?php echo '<img src="'.'data: '.mime_content_type($foto['foto5']).';base64,'.$imageData.'"/>';?> </div>
                            </div>
                        </section>
                    </div>
                </div>


                      
  
                   
            </div>
            <?php include('../includes/footer.html') ?>
        </body>
    </html>