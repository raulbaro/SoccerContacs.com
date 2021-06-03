<?php

?>
<!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="utf-8">
             <!-- CSS -->
            <link href="../vista/css/sidebar.css" rel="stylesheet"/>
            <link href="../vista/css/home.css" rel="stylesheet"/>
            <link href="../vista/css/product.css" rel="stylesheet"/>
            <link rel="stylesheet" href="../vista/css/bootstrap-side-modals.css">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <!-- Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
             <!-- Iconos -->
            <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
      
  


           
            <title>Inicio</title>
        </head>
        <body>
            <?php include('../includes/loading.html') ?>
            <main id="main">
            <?php include('../includes/navbar.php') ?>
            
            <div class="contenedor" id="contenedor">

    
            <div class="items-container " id="items-container">
            <?php for ($i=0; $i<$cantidadPerfilesTotales/*10*/; $i++) {  ?>
                        <?php 
                        
                        $usuario=Perfil::obtenerUsuarioDelPerfil($perfil[$i]->usuarioPerfilJugador);
                        $foto=Perfil::obtenerFotosPerfil($perfil[$i]->idPerfil);
                        $imageData = base64_encode($foto['fotoPerfil']);
                        $src = 'data: '.mime_content_type($foto['fotoPerfil']).';base64,'.$imageData;
                        $price = substr($perfil[$i]->valorMercado, 0, $perfil[$i]->valorMercado < 0 ? 3 : 2);
                            
                        ?>
                <div class="item " id="marker">
                    <div class="diamond-container">
                        <div class="diamond">
                            <div class="diamond-wrapper">
                                <div class="diamond-content"> <?= $price ?>K</div>
                            </div>
                        </div>
                    </div>
                    <div class="item-wrapper">
                        <div class="content-wrapper">
                            <div class="img-container">
                                <div class="bg-square"></div>
                                <img class="item-img"<?php echo '<img src="'.$src.'"/>';?> 
                            </div>

                            <div class="content-text">
                                <div class="item-name"><?= $usuario['nombreU']." ".$usuario['apellido1U'];?></div>
                            
                                <div class="item-dema"><?= $perfil[$i]->demarcacionP?></div>

                                <div class="item-subtext-container">
                            
                                    <span class="item-subtext subtext-mfr"><?= $perfil[$i]->peso  ?>Kg</span> |
                                    <span class="item-subtext subtext-model"><?= $perfil[$i]->altura  ?>Cm</span>
                                </div>
                            </div>
                        </div>
                        <div class="view-more-btn">Ver Más<span class="view-symbol"></span></div>
                        <div class="item-details-container">
                            <div class="details-content-wrapper">
                                <div class="detail">
                                    <span class="detail-title">Nombre | </span>
                                    <span class="detail-text detail-name"><?= $usuario['nombreU']." ".$usuario['apellido1U']." ".$usuario['apellido2U'];?></span>
                                </div>

                                <div class="detail">
                                    <span class="detail-title">Demarcación | </span>
                                    <span class="detail-text mfr-name"><?= $perfil[$i]->demarcacionP  ?></span>
                                </div>

                                <div class="detail">
                                    <span class="detail-title">Logros 🏆| </span>
                                    <span class="detail-text detail-model"><?= $perfil[$i]->logros  ?></span>
                                </div>

                                <div class="detail">
                                    <span class="detail-title">Lateralidad | </span>
                                    <span class="detail-text detail-msrp"><?= $perfil[$i]->lateralidad  ?></span>
                                </div>

                                <div class="detail detail-desc">
                                    <div class="detail-title">Descripción</div>
                                    <div class="detail-description"><?= $perfil[$i]->descripcion  ?></div>
   
                                        
                                    
                                </div>
                                <div class="derecha">
                                    <form action="mensajePerfil.php" method="post">
                                        <input type="hidden" name="contacto" <?php echo 'value='.$usuario['emailU'] ?>>
                                        <a  <?php echo 'href=verServicio.php?idPerfil='.$perfil[$i]->idPerfil ?>><span class="iconify" data-icon="emojione:eye" data-inline="false" data-width="50" data-height="50"></span></a>
                                        <button type="submit" name="send"><span class="iconify" data-icon="flat-ui:mail" data-inline="false"></span></button> 
                                    </form>
                                
                                </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php } ?>
        </div>
        </div>
    </div>
            </main>
              

  
<script>
$('.view-more-btn').on('click', function() {
	var thisParentInit = $(this).parent('.item-wrapper');
	var thisParent = thisParentInit.parent('.item');
	var thisSymbol = $(this).find('.view-symbol');
	if (thisParent.hasClass('active') == false) {
		thisParent.addClass('active');
		$(this).text('Ver menos');
	} else if (thisParent.hasClass('active') == true) {
		thisParent.removeClass('active');
		$(this).text('Ver más');
	}
});

</script>
<?php include('../includes/footer.html') ?>
<script src="../assets/js/loading.js"></script>
        </body>
               
    </html>

