<?php

?>
<!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="utf-8">
            <link href="../vista/css/sidebar.css" rel="stylesheet"/>
            <link href="../vista/css/home.css" rel="stylesheet"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <title>Inicio</title>
        </head>
        <body>
            <?php include('../includes/navbar.html') ?>
            <div class="container">
            <div class="row">
           
            <?php 
                for ($i=0; $i<$cantidadPerfilesTotales; $i++) { 
                
                     
            ?>
         <div class="col">
            <div class="card" style="width: 18rem;">
            <?php
                 $foto=Perfil::obtenerFotosPerfil($perfil[$i]->usuarioPerfilJugador);
         
            ?>
          
            <?= '<img src="data:image/jpeg;base64,'.base64_encode( $foto['fotoPerfil'] ).' " class="card-img-top"  width="150"/>'; ?>
   
                <div class="card-body">
                    <h5 class="card-title">
                    <?php  
                            $usuario=Perfil::obtenerUsuarioDelPerfil($perfil[$i]->usuarioPerfilJugador);
                            echo $usuario['nombreU']." ".$usuario['apellido1U']." ".$usuario['apellido2U'];
                    ?>
                    </h5>
                    <h6 class="card-title"><?=$perfil[$i]->nombre;?></h6>
                    <p class="card-text"><?=$perfil[$i]->descripcion;?></p>
                    <a href="#" class="btn btn-primary">Ver perfil</a>
                </div>
            </div>
             
            </div>
            <?php
                   
                }
  
            ?>
 </div>
        </body>
    </html>

