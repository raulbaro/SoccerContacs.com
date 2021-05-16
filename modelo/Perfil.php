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
    protected $fotos;
    protected $videos;
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
        $this->fotos = $row['fotos'];
        $this->videos = $row['videos'];
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
    public static function obtenerDatosPerfiles($email){
        $sql = "SELECT * FROM perfiljugador WHERE usuarioPerfilJugador=(Select perfiljugador from usuario where usuario.emailU='$email')";
        $resultado = DB::ejecutaConsulta($sql);
        $datosPerfil = [];

     
        if($resultado) {
            while($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                array_push($datosPerfil, new Perfil($row));
            }
        }
        return $datosPerfil;
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
    public static function obtenerUsuarioDelPerfil($perfil){
        $sql = "SELECT * FROM usuario WHERE perfilJugador=$perfil";
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

}
