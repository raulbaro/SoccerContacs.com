<?php
require_once('Usuario.php');

class DB {
    public static function mensajeError($mensaje) {
        echo "<p><span style='color: red; font-size: 18pt;'>$mensaje</span></p>";
    }
    public static function ejecutaConsulta($sql) {
        $dsn = "mysql:host=mysql.soccercontacts.com;dbname=scpruebas;charset=utf8"; 
        //$dsn = "mysql:host=localhost;dbname=scpruebas;charset=utf8";
        $usuario = 'pruebasoccer';
        $contrasena = 'soccer2020';
        
        try {
            $dwes = new PDO($dsn, $usuario, $contrasena);
      
            if (substr(strtoupper(trim($sql)),0,6)=="SELECT") {
                $resultado = $dwes->query($sql);
               
            } else {
                $resultado = $dwes->exec($sql);
          
            }
        } catch (PDOException $ex) {
            if (!isset($dwes)) {
                self::mensajeError("Error conectando con el servidor de bases de datos.");
                exit(1);
            }
            mensajeError($ex->getMessage());
            exit(2);
        }
        return $resultado;
    }
    public static function verificarUsuario($email, $password) {
        $password = md5($password);
        $sql = "SELECT * FROM users ";
        $sql .= "WHERE email='$email' ";
        $sql .= "AND password='" . $password . "';";
        $resultado = self::ejecutaConsulta($sql);
        $_SESSION['sesion']=true;
        $verificado = false;

        if(isset($resultado)) {
            $fila = $resultado->fetch();
            if($fila !== false) $verificado=true;
        }
        return $verificado;

    }
    // public static function obtenerServicios(){
    //     $sql = "SELECT * FROM users ";
    //     $sql .= "WHERE email='$email' ";
    //     $sql .= "AND password='" . $password . "';";
    //     $resultado = self::ejecutaConsulta($sql);
    //     var_dump($resultado);

    // }
    public static function nuevoUsuario($name,$email,$password){
            $date = date('y-m-d h:i:s');
            $sql = "INSERT INTO users (id,name,email,password,created_at) VALUES (NULL,'$name','$email','$password','$date')";
            //var_dump($sql);
            $resultado = self::ejecutaConsulta($sql);
           
      
    }
    public static function nuevoDatosUsuario($idU,$nombreU,$apellido1U,$apellido2U,$tlf1U,$tlf2U,$emailU,$direccionU,$estadoCivilU,$numeroHijosU,$estudiosU,$fechaNacimientoU,$descripcionPersonalU,$direccion_idDireccion,$nombreDeportivo,$fotoU){
        $sql ="INSERT INTO usuario (idU, nombreU, apellido1U, apellido2U, tlf1U, tlf2U, emailU, direccionU, estadoCivilU, numeroHijosU,estudiosU, fechaNacimientoU, descripcionPersonalU, direccion_idDireccion, nombreDeportivo,fotoU) VALUES (NULL,'$nombreU','$apellido1U','$apellido2U','$tlf1U','$tlf2U','$emailU','$direccionU','$estadoCivilU',$numeroHijosU,'$estudiosU','$fechaNacimientoU','$descripcionPersonalU','$direccion_idDireccion','$nombreDeportivo','$fotoU')";

        $resultado = self::ejecutaConsulta($sql);
        var_dump($resultado);
  
}
    
    public static function comprobarUsuario($email) {
        $sql = "SELECT * FROM users ";
        $sql .= "WHERE email='$email' ";
        $resultado = self::ejecutaConsulta($sql);
        $verificado = false;

        if(isset($resultado)) {
            $fila = $resultado->fetch();
           
            if($fila !== false) $verificado=true;
        }
        return $verificado;

    }
    

    static function obtenerDatosUsuario($email) {
        $sql = "SELECT * FROM usuario WHERE emailU='$email'";
        $resultado = self::ejecutaConsulta($sql);
        
        if($resultado) {
            $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
           
            return $usuario;
        }

      
    }
    static function obtenerDatosUsuarioPorPerfil($idPerfil) {
        $sql = "SELECT * FROM usuario WHERE idU=(SELECT usuarioPerfilJugador from perfiljugador WHERE idPerfil=$idPerfil)";
        $resultado = self::ejecutaConsulta($sql);
        
        if($resultado) {
            $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
           
            return $usuario;
        }

      
    }

    
    static function obtenerDireccionUsuario($idDireccion) {
        $sql = "SELECT * FROM direccion WHERE idDireccion='$idDireccion'";
        $resultado = self::ejecutaConsulta($sql);
        
        if($resultado) {
            $direccion = $resultado->fetch(PDO::FETCH_ASSOC);
           
            return $direccion;
        }

      
    }

    static function obtenerPaisUsuario($idPais) {
        $sql = "SELECT * FROM pais WHERE idPais='$idPais'";
        $resultado = self::ejecutaConsulta($sql);
        
        if($resultado) {
            $pais = $resultado->fetch(PDO::FETCH_ASSOC);
           
            return $pais;
        }

      
    }

    public static function obtenerDatos() {
        $sql = "SELECT * FROM usuario ORDER BY RAND()";
        $resultado = self::ejecutaConsulta($sql);
        
        $usuarios = [];

     
        if($resultado) {
            while($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                array_push($usuarios, new Usuario($row));
            }
        }
        return $usuarios;
    }

    static function ordenarPerfiles($campo,$dato) {
        $sql = "SELECT * FROM perfiljugador WHERE $campo=$dato";
        $resultado = self::ejecutaConsulta($sql);
        
        if($resultado) {
            $pais = $resultado->fetch(PDO::FETCH_ASSOC);
           
            return $pais;
        }

      
    }
}
