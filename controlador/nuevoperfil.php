<?php 
session_start();
require_once('../modelo/DB.php');
require_once('../modelo/Perfil.php');
$email = $_SESSION['email'];



if($_POST['enviarPerfil']){
    
    $idPerfil = Perfil::obtenerUsuario($email);
    


    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $demarcacionP = $_POST['posicion'];
    $lateralidad = $_POST['lateral'];
    $descripcion = $_POST['descripcion'];
    $historial = $_POST['historial'];
    $logros = $_POST['logros'];
    $noticias = $_POST['noticia'];
    $finContrato = $_POST['finContrato'];
    $representante = $_POST['representante'];
    $valorMercado = $_POST['valorMercado'];
    $operaciones = $_POST['operaciones'];
    $usuarioPerfilJugador =  $idPerfil['idU'];
    $nombre = $_POST['nombre'];
    $fotoPerfil = basename($_FILES['fotoPerfil']['name']);
    $foto2 =basename($_FILES['fotoExtra2']['name']);
    $foto3 = basename($_FILES['fotoExtra3']['name']);
    $foto4 = basename($_FILES['fotoExtra4']['name']);
    $foto5 = basename($_FILES['fotoExtra5']['name']);
    $video1 = $_POST['VideoExtra1'];
    $video2 = $_POST['VideoExtra2'];

     
    

    $tipoDeImagen = pathinfo($fotoPerfil, PATHINFO_EXTENSION); 
    $fotoPerfilTemporal = $_FILES['fotoPerfil']['tmp_name']; 
    $fotoPerfilFinal = addslashes(file_get_contents($fotoPerfilTemporal)); 

    $tipoDeImagen2 = pathinfo($foto2, PATHINFO_EXTENSION); 
    $foto2temporal = $_FILES['fotoExtra2']['tmp_name']; 
    $foto2Final = addslashes(file_get_contents($foto2temporal)); 
    
    $tipoDeImagen3 = pathinfo($foto3, PATHINFO_EXTENSION); 
    $foto3temporal = $_FILES['fotoExtra3']['tmp_name']; 
    $foto3Final = addslashes(file_get_contents($foto3temporal)); 

    $tipoDeImagen4 = pathinfo($foto4, PATHINFO_EXTENSION); 
    $foto4temporal = $_FILES['fotoExtra4']['tmp_name']; 
    $foto4Final = addslashes(file_get_contents($foto4temporal)); 

    $tipoDeImagen5 = pathinfo($foto5, PATHINFO_EXTENSION); 
    $foto5temporal = $_FILES['fotoExtra5']['tmp_name']; 
    $foto5Final = addslashes(file_get_contents($foto5temporal)); 

    Perfil::nuevoPerfil($peso,$altura,$demarcacionP,$lateralidad,$descripcion,$historial,$logros,$noticias,$finContrato,$representante,$valorMercado,$operaciones,$usuarioPerfilJugador,$nombre);
    $idNuevoPerfil = Perfil::obtenerIdPerfilNuevo($descripcion);
 
 
   //var_dump($idNuevoPerfil);
   
    Perfil::addFotosPerfil($fotoPerfilFinal,$foto2Final,$foto3Final,$foto4Final,$foto5Final,$idNuevoPerfil); 
  
    var_dump(Perfil::addVideosPerfil($video1,$video2,$idNuevoPerfil)); 
    header("Location: https://testapp.soccercontacts.com/controlador/micuenta.php");
}else {
    include_once('../vista/nuevoperfil.php');
}




?>