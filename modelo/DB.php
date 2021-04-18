<?php
require_once('Usuario.php');

class DB {
    public static function mensajeError($mensaje) {
        echo "<p><span style='color: red; font-size: 18pt;'>$mensaje</span></p>";
    }
    public static function ejecutaConsulta($sql) {
        $dsn = "mysql:host=localhost;dbname=scpruebas;charset=utf8";
        $usuario = 'root';
        $contrasena = '';
        
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
        $sql = "SELECT * FROM users ";
        $sql .= "WHERE email='$email' ";
        $sql .= "AND password='" . $password . "';";
        $resultado = self::ejecutaConsulta($sql);
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
            var_dump($date);
            $sql = "INSERT INTO users (id,name,email,password,created_at) VALUES (NULL,'$name','$email','$password','$date');";
            $resultado = self::ejecutaConsulta($sql);
           
      
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


  
}
