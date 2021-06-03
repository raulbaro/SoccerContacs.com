<!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="utf-8">
            
            <link href="../vista/css/sidebar.css" rel="stylesheet"/>
            <link href="../vista/css/perfiles.css" rel="stylesheet"/>

            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <title>Perfiles</title>


            
        </head>
        <body>
            <?php include('../includes/navbar.php')?>
    

            <div class="container">
        
                <div class="p-3 text-center ">
                    <h1 class="mb-3">Mi Perfiles</h1>

                </div>
                
                <div class="row">
                    <?php 
                 
                        for($i=0;$i<$cantidad['count(idPerfil)'];$i++){
                       
                    ?>
                      <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?=$perfiles[$i]->nombre?></h5>
                       
                                <p class="card-text text-center"><?=$perfiles[$i]->descripcion?></p>
                             

                            </div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"  <?php echo 'data-bs-target=#exampleModal'.$perfiles[$i]->idPerfil;?>  data-bs-target="#exampleModal">
                                    Ver
                                </button>
                        </div>
                        <div class="modal fade"  <?php echo 'id=exampleModal'.$perfiles[$i]->idPerfil;?> tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel"><?=$perfiles[$i]->nombre ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td class="font-weight-bold">Peso:</td>
                                                <td><?=$perfiles[$i]->peso?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Altura:</td>
                                                <td><?=$perfiles[$i]->altura?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Demarcacion:</td>
                                                <td><?=$perfiles[$i]->demarcacionP?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Lateralidad:</td>
                                                <td><?=$perfiles[$i]->lateralidad?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Descripcion:</td>
                                                <td><?=$perfiles[$i]->descripcion?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Historial:</td>
                                                <td><?=$perfiles[$i]->historial?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Logros:</td>
                                                <td><?=$perfiles[$i]->logros?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Noticias:</td>
                                                <td><?=$perfiles[$i]->noticias?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Fin de Contrato:</td>
                                                <td><?=$perfiles[$i]->finContrato?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Representante:</td>
                                                <td><?=$perfiles[$i]->representante?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Valor de Mercado:</td>
                                                <td><?=$perfiles[$i]->valorMercado?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Operaciones:</td>
                                                <td><?=$perfiles[$i]->operaciones?></td>
                                            </tr>
                                           
                                        </table>
                                    </div>
                            
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
 
                  
                    
                </div>
                

                <?php include('../includes/footer.html') ?> 
        </body>

    </html>
    