<!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="utf-8">
            <link href="./css/nuevoperfil.css" rel="stylesheet"/>
            <link href="./css/sidebar.css" rel="stylesheet"/>

            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <title>Perfiles</title>
        </head>
        <body>
            <?php include('../includes/navbar.html')?>
    

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
                                <h5 class="card-title"><?= $perfiles[$i]->nombre?></h5>
                       
                                <p class="card-text"><?=$perfiles[$i]->descripcion?></p>
                                <a  href="nuevoperfil.php" class="btn btn-primary stretched-link">Ver</a>
                                <a  href="nuevoperfil.php" class="btn btn-primary stretched-link">Editar</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                  
                
                    
                </div>
                

           
        </body>

    </html>
    