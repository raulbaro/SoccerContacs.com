<?php
require_once('DB.php');
require_once('Usuario.php');
class Perfil {
    protected $idPerfil;
    protected $peso;
    protected $altura;
    protected $demarcacionP;
    protected $lateralidad;
    protected $descripcion;
    protected $historial;
    protected $logros;
    protected $noticias;
    protected $finContrato;
    protected $representante;
    protected $valorMercado;
    protected $operaciones;
    protected $usuarioPerfilJugador; 
    protected $nombre; 

    public function __get($atributo) {
        return $this->$atributo;
    }
    public function __set($atributo,$valor) {
        $this->$atributo=$valor;
    }
    public function __construct($row) {

        $this->idPerfil = $row['idPerfil'];
        $this->peso = $row['peso'];
        $this->altura = $row['altura'];
        $this->demarcacionP = $row['demarcacionP'];
        $this->lateralidad = $row['lateralidad'];
        $this->descripcion = $row['descripcion'];
        $this->historial = $row['historial'];
        $this->logros = $row['logros'];
        $this->noticias= $row['noticias'];
        $this->finContrato = $row['finContrato'];
        $this->representante = $row['representante'];
        $this->valorMercado = $row['valorMercado'];
        $this->operaciones = $row['operaciones'];
        $this->usuarioPerfilJugador = $row['usuarioPerfilJugador'];
        $this->nombre= $row['nombre'];
    }
    public static function obtenerCantidadPerfiles($email){
        $sql = "SELECT count(idPerfil) FROM perfiljugador WHERE usuarioPerfilJugador=(Select perfiljugador from usuario where emailU='$email')";
        $resultado = DB::ejecutaConsulta($sql);
  
        
        if($resultado) {
            $cantidadPerfiles = $resultado->fetch(PDO::FETCH_ASSOC);
          
            return $cantidadPerfiles;
        }
    }
    public static function nuevoPerfil($peso,$altura,$demarcacionP,$lateralidad,$descripcion,$historial,$logros,$noticias,$finContrato,$representante,$valorMercado,$operaciones,$usuarioPerfilJugador,$nombre){
        $sql = "INSERT INTO perfiljugador (idPerfil,peso,altura,demarcacionP,lateralidad,descripcion,historial,logros,noticias,finContrato,representante,valorMercado,operaciones,usuarioPerfilJugador,nombre) VALUES (NULL,$peso,$altura,'$demarcacionP','$lateralidad','$descripcion','$historial',$logros,'$noticias','$finContrato',$representante,$valorMercado,$operaciones,$usuarioPerfilJugador,'$nombre')";
      
        $resultado = DB::ejecutaConsulta($sql);
     
   
    }

    public static function addFotosPerfil($fotoPerfil,$foto2,$foto3,$foto4,$foto5,$idNuevoPerfil){
        $sql = "INSERT INTO fotoperfil (idFoto,fotoPerfil,foto2,foto3,foto4,foto5,perfiljugador) VALUES (NULL,'$fotoPerfil','$foto2','$foto3','$foto4','$foto5',$idNuevoPerfil)";
        $resultado = DB::ejecutaConsulta($sql);
       
        
    }

    public static function addVideosPerfil($video1,$video2,$idNuevoPerfil){
        $sql = "INSERT INTO videoperfil (idVideo,video1,video2,perfiljugador) VALUES (NULL,'$video1','$video2','$idNuevoPerfil')";
        var_dump($sql);
        $resultado = DB::ejecutaConsulta($sql);
        var_dump($resultado);
    }

    public static function obtenerIdPerfilNuevo($descripcion){
        $sql = "SELECT idPerfil FROM perfiljugador WHERE descripcion='$descripcion'";
        $resultado = DB::ejecutaConsulta($sql);
     
        if($resultado) {
            $idU = $resultado->fetch(PDO::FETCH_ASSOC);
         
            return $idU['idPerfil'];
        }
    }
    public static function obtenerTodosPerfiles(){
        $sql = "SELECT * FROM perfiljugador ORDER BY RAND()";
        $resultado = DB::ejecutaConsulta($sql);
        $perfiles = [];

     
        if($resultado) {
            while($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                array_push($perfiles, new Perfil($row));
            }
        }
       
        return $perfiles;
    }
    public static function obtenerPerfilEspecifico($idPerfil){
        $sql = "SELECT * FROM perfiljugador WHERE idPerfil=$idPerfil";
        $resultado = DB::ejecutaConsulta($sql);
        $perfil = [];

     
        if($resultado) {
            while($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                array_push($perfil, new Perfil($row));
            }
        }
       
        return $perfil;
    }
    public static function obtenerUsuarioDelPerfil($perfil){
        $sql = "SELECT * FROM usuario WHERE idU=$perfil";
        $resultado = DB::ejecutaConsulta($sql);
        if($resultado) {
            $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
      
            return $usuario;
        }
    }
    public static  function obtenerFotosPerfil($perfil){
        $sql = "SELECT * FROM fotoperfil WHERE perfilJugador='$perfil'";
        $resultado = DB::ejecutaConsulta($sql);
        
        if($resultado) {
            $foto = $resultado->fetch(PDO::FETCH_ASSOC);
           
            return $foto;
        }
    }
    public static  function obtenerUsuario($email){
        $sql = "SELECT idU FROM usuario WHERE emailU='$email'";
        $resultado = DB::ejecutaConsulta($sql);
        if($resultado) {
            $id = $resultado->fetch(PDO::FETCH_ASSOC);
           
            return $id;
        }
      
    }

}
