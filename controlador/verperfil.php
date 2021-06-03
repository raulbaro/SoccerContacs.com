<?php
require_once('../modelo/Usuario.php');
require_once('../modelo/Perfil.php');
    $id = $_GET['id'];

    $datosPerfil= Perfil::obtenerPerfil($id);

    include_once('../vista/verperfil.php');
?>