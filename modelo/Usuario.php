<?php
require_once('DB.php');
require_once('Perfil.php');
class Usuario {
    protected $idU;
    protected $nombreU;
    protected $apellido1U;
    protected $apellido2U;
    protected $tlf1U; 
    protected $tlf2U;
    protected $emailU;
    protected $direccionU;
    protected $estadoCivilU;
    protected $numeroHijosU;
    protected $estudiosU;
    protected $fotoU;
    protected $fechaNacimientoU;
    protected $descripcionPersonalU;
    protected $direccion_idDireccion;

    public function __get($atributo) {
        return $this->$atributo;
    }
    public function __set($atributo,$valor) {
        $this->$atributo=$valor;
    }
    public function __construct($row) {
        $this->$idU = $row['idU'];
        $this->$nombreU = $row['nombreU'];
        $this->$apellido1U = $row['apellido1U'];
        $this->$apellido2U = $row['apellido2U'];
        $this->$tlf1U = $row['tlf1U'];
        $this->$tlf2U = $row['tlf2U'];
        $this->$emailU = $row['emailU'];
        $this->$direccionU = $row['direccionU'];
        $this->$estadoCivilU = $row['estadoCivilU'];
        $this->$numeroHijosU = $row['numeroHijosU'];
        $this->$estudiosU = $row['estudiosU'];
        $this->$fotoU = $row['fotoU'];
        $this->$fechaNacimientoU = $row['fechaNacimientoU'];
        $this->$descripcionPersonalU = $row['descripcionPersonalU'];
        $this->$direccion_idDireccion = $row['direccion_idDireccion'];
    } 
    static function obtenerDatos() {
        $sql = "SELECT * FROM usuario ORDER BY RAND()";
        $resultado = self::ejecutaConsulta($sql);
        
        if($resultado) {
            $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
           
            return $usuario;
        }

      
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

}
