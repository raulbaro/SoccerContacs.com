<!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="utf-8">
             <!-- CSS -->
            <link href="../vista/css/sidebar.css" rel="stylesheet"/>
            <link href="../vista/css/nuevoUsuario.css" rel="stylesheet"/>
            <link rel="stylesheet" href="../vista/css/bootstrap-side-modals.css">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <!-- Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
             <!-- Iconos -->
            <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  


           
            <title>Nuevo Usuario</title>
        </head>
        <body>
        <?php include('../includes/loading.html') ?>
            <main id="main">
            <?php include('../includes/navbar.php') ?>
                <form action="../controlador/nuevoUsuario.php" method="POST" enctype='multipart/form-data'>
                <div class="capaDatos">
                    <table class="table">
                        <tr>
                            <td><label for="nombre">Nombre:</label></td>
                            <td><input type="text" name="nombre" id="nombre"/></td>
                        </tr>
                        <tr>
                            <td><label for="apellido1">1º Apellido:</label></td>
                            <td><input type="text" name="apellido1" id="apellido1"/></td>
                        </tr>
                        <tr>
                            <td><label for="apellido2">2º Apellido:</label></td>
                            <td><input type="text" name="apellido2" id="apellido2"/></td>
                        </tr>
                        <tr>
                            <td><label for="telefono">Telefono:</label></td>
                            <td><input type="text" name="telefono" id="telefono"   pattern="[0-9]{9}"/></td>
                        </tr>
                        <tr>
                            <td><label for="telefono2">Telefono2:</label></td>
                            <td><input type="text" name="telefono2" id="telefono2"   pattern="[0-9]{9}"/></td>
                        </tr>

                         

                        <tr>
                            <td><label for="direccion">Direccion:</label></td>
                            <td><input type="text" name="direccion" id="direccion" /></td>
                        </tr>
                        <tr>
                            <td><label for="estadoCivil">Estado Civil:</label></td>
                            <td>
                                <select name="estadoCivil" id="cars" required>
                                    <option value="Soltero">Soltero</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Separad">Separad</option>
                                    <option value="Divorciado">Divorciado</option>
                                    <option value="Viudo">Viudo</option>
                                    <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="numHijos">Numero de Hijos:</label></td>
                            <td><input type="number" name="numHijos" id="numHijos" /></td>
                        </tr>
                        <tr>
                            <td><label for="fotoPerfil">Foto de Perfil:</label></td>
                            <td><input type="file" name="fotoPerfil" id="fotoPerfil" /></td>
                        </tr>
                        <tr>
                            <td><label for="estudios">Max Estudio:</label></td>
                            <td><input type="text" name="estudios" id="estudios" /></td>
                        </tr>
                        <tr>
                            <td><label for="fechaNac">Fecha Nacimiento:</label></td>
                            <td><input type="date" name="fechaNac" id="fechaNac" /></td>
                        </tr>
                        <tr>
                            <td><label for="descripcion">Descripcion:</label></td>
                            <td><textarea name="descripcion" maxlenght="240"></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="Pais">Pais:</label></td>
                            <td>
                                <select name="pais" id="pais" required> 
                                    <option value="España">España</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="Ciudad">Ciudad:</label></td>
                            <td>
                                <select name="provincia" size="1">
                                    <option value='selecciona'>Selecciona</option>
                                    <option value='A Coruña' >A Coruña</option>
                                    <option value='álava'>álava</option>
                                    <option value='Albacete' >Albacete</option>
                                    <option value='Alicante'>Alicante</option>
                                    <option value='Almería' >Almería</option>
                                    <option value='Asturias' >Asturias</option>
                                    <option value='ávila' >Ávila</option>
                                    <option value='Badajoz' >Badajoz</option>
                                    <option value='Barcelona'>Barcelona</option>
                                    <option value='Burgos' >Burgos</option>
                                    <option value='Cáceres' >Cáceres</option>
                                    <option value='Cádiz' >Cádiz</option>
                                    <option value='Cantabria' >Cantabria</option>
                                    <option value='Castellón' >Castellón</option>
                                    <option value='Ceuta' >Ceuta</option>
                                    <option value='Ciudad Real' >Ciudad Real</option>
                                    <option value='Córdoba' >Córdoba</option>
                                    <option value='Cuenca' >Cuenca</option>
                                    <option value='Gerona' >Gerona</option>
                                    <option value='Girona' >Girona</option>
                                    <option value='Las Palmas' >Las Palmas</option>
                                    <option value='Granada' >Granada</option>
                                    <option value='Guadalajara' >Guadalajara</option>
                                    <option value='Guipúzcoa' >Guipúzcoa</option>
                                    <option value='Huelva' >Huelva</option>
                                    <option value='Huesca' >Huesca</option>
                                    <option value='Jaén' >Jaén</option>
                                    <option value='La Rioja' >La Rioja</option>
                                    <option value='León' >León</option>
                                    <option value='Lleida' >Lleida</option>
                                    <option value='Lugo' >Lugo</option>
                                    <option value='Madrid' >Madrid</option>
                                    <option value='Malaga' >Málaga</option>
                                    <option value='Mallorca' >Mallorca</option>
                                    <option value='Melilla' >Melilla</option>
                                    <option value='Murcia' >Murcia</option>
                                    <option value='Navarra' >Navarra</option>
                                    <option value='Orense' >Orense</option>
                                    <option value='Palencia' >Palencia</option>
                                    <option value='Pontevedra'>Pontevedra</option>
                                    <option value='Salamanca'>Salamanca</option>
                                    <option value='Segovia' >Segovia</option>
                                    <option value='Sevilla' >Sevilla</option>
                                    <option value='Soria' >Soria</option>
                                    <option value='Tarragona' >Tarragona</option>
                                    <option value='Tenerife' >Tenerife</option>
                                    <option value='Teruel' >Teruel</option>
                                    <option value='Toledo' >Toledo</option>
                                    <option value='Valencia' >Valencia</option>
                                    <option value='Valladolid' >Valladolid</option>
                                    <option value='Vizcaya' >Vizcaya</option>
                                    <option value='Zamora' >Zamora</option>
                                    <option value='Zaragoza'>Zaragoza</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="nombreD">Nombre Deportivo:</label></td>
                            <td><input type="text" name="nombreD" id="nombreD" /></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="btn btn-primary" type="submit" name="datos" value="Enviar"/></td>
                        </tr>
                    </table>
                    <input type="hidden" name="email" id="email" <?php echo 'value="'.$email.'"'; ?> />
                    
                </div>
                    
                    
                    
                </form>
            </main>
        <script src="../assets/js/loading.js"></script>
                    <!-- select -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"  integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="../assets/js/select.js"></script>
      
        </body>
    </html>