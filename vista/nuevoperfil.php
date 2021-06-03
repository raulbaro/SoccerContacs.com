<!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="utf-8">
            <title>Nuevo Perfil</title>
            <link href="../vista/css/sidebar.css" rel="stylesheet"/>
            <link href="../vista/css/nuevoperfil.css" rel="stylesheet"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        </head>
        <body>

            
            <?php include('../includes/loading.html') ?>
            <main id="main">
            <?php include('../includes/navbar.php') ?>
            <h1>Formulario de Perfil</h1>
                <form action="../controlador/nuevoperfil.php" method="POST" class="formulario" enctype="multipart/form-data">
                    <div>

                         <fieldset class="fieldset_color_green">
                            <legend class="legend_color_green">Datos Personales:</legend>
                            <div class="capaDatos">
                                <table>
                                    <tr>
                                        <td><label for="nombre">Nombre Perfil:</label></td>
                                        <td><input type="text" name="nombre" id="nombre" maxlenght="25" required/><br/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="peso">Peso (Kg):</label></td>
                                        <td><input type="number" name="peso" id="peso" required/><br/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="altura">Altura (Cm):</label></td>
                                        <td><input type="number" name="altura" id="altura" required/><br/></td>
                                    </tr>
                                </table>       
                            </div>
                            
                        </fieldset>
                        <fieldset class="fieldset_color_green">
                            <legend class="legend_color_green">Datos Deportivos:</legend>
                            <div class="capaDatos">
                                <table>
                                    <tr>
                                        <td><label for="demarcacion">Demarcación:</label></td>
                                        <td>   
                                            <select name="posicion" id="posicion" required>
                                                <option value="Portero">Portero(POR)</option>
                                                <option value="Carrilero Derecho">Carrilero Derecho(CAD)</option>
                                                <option value="Lateral Derecho">Lateral Derecho(LTD)</option>
                                                <option value="Defensa Central">Defensa Central(DFC)</option>
                                                <option value="Lateral Izquierdo">Lateral Izquierdo(LTI)</option>
                                                <option value="Medio Centro Defensivo">Medio Centro Defensivo(MCD)</option>
                                                <option value="Medio Derecho">Medio Derecho(MD)</option>
                                                <option value="Medio Centro">Medio Centro(MC)</option>
                                                <option value="Medio Izquierdo">Medio Izquierdo(MI)</option>
                                                <option value="Medio Centro Ofensivo">Medio Centro Ofensivo(MCO)</option>
                                                <option value="Segundo Delantero Derecho">Segundo Delantero Derecho(SDD)</option>
                                                <option value="Media Punta">Media Punta(MP)</option>
                                                <option value="Segundo Delantero Izquierdoo">Segundo Delantero Izquierdo(SDI)</option>
                                                <option value="Extremo Derecho">Extremo Derecho(ED)</option>
                                                <option value="Delantero Centro">Delantero Centro(MDC)</option>
                                                <option value="Extremo Izquierdo">Extremo Izquierdo(EI)</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="lateralidad">Lateralidad:</label></td> 
                                        <td>
                                            <select name="lateral" id="lateral" required>
                                                <option value="Diestro">Diestro</option>
                                                <option value="Zurdo">Zurdo</option>
                                                <option value="Ambos">Ambos</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="descripcion">Descripción:</label></td>
                                        <td><textarea name="descripcion" maxlength="240" placeholder="maximo 240 caracteres" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label for="historial">Historial:</label></td>
                                        <td><textarea name="historial" maxlength="240" placeholder="Use - para cada equipo o lugar&#10;-Historia 1&#10;-Historia 2&#10;-Historia 3"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label for="noticia">Noticias:</label></td>
                                        <td><textarea name="noticia" maxlength="240" placeholder="Use - para cada noticias&#10;-Noticia 1&#10;-Noticia 2&#10;-Noticia 3"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label for="logros" required>Logros:</label></td>
                                        <td><input type="number" name="logros" id="logros"/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="finContrato">Fin del Contrado:</label></td>
                                        <td>  <input type="date" name="finContrato" id="finContrato"/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="representante">Representante:</label></td>
                                        <td>
                                            <select name="representante" id="representante" required>
                                                <option value="1">Si</option>
                                                <option value="0">No</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="valorMercado">Valor de Mercado:</label></td>
                                        <td><input type="number" name="valorMercado" id="valorMercado"/><br/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="operaciones">Operaciones:</label></td>
                                        <td><input type="number" name="operaciones" id="operaciones"/><br/></td>
                                    </tr>
                                </table>

                            </div>
                            
                        </fieldset>
                        <fieldset class="fieldset_color_green">
                            <legend class="legend_color_green">Fotos Y Videos</legend>
                            <div class="capaDatos">
                                <table>
                                    <tr>
                                        <td><label for="fotoPerfil">Foto de Perfil:</label></td>
                                        <td><input type="file" name="fotoPerfil" id="fotoPerfil"/></td>
                                    </tr>
                                    <?php 
                                    for ($i=2; $i<=5; $i++) { 
                                        echo '<tr>';
                                        echo '<td><label for=foto'.$i.'>Foto:</label></td>';
                                        echo '<td><input type="file" name="fotoExtra'.$i.'" id="fotoExtra"/></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                     <?php 
                                    for ($i=1; $i<=2; $i++) { 
                                        echo '<tr>';
                                        echo '<td><label for=video'.$i.'>Video (URL):</label></td>';
                                        echo '<td><input type="text" name="VideoExtra'.$i.'" id="fotoExtra"/></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </table>
                            </div>
                            
                        </fiedldset>

       
                        
                        <div class="boton">
                            <input type="submit" name="enviarPerfil" class="btn btn-primary" value="Enviar"/>
                        </div>
                        
                    </div>

                </form>
            </main>
            <?php include('../includes/footer.html') ?>
            <script src="../assets/js/loading.js"></script>
        </body>
    </html>