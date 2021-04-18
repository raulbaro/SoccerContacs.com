<?php
class Producto {
    protected $id;
    protected $name;
    protected $email;
    protected $email_verified;
    protected $password; 

    public function __get($atributo) {
        return $this->$atributo;
    }
    public function __set($atributo,$valor) {
        $this->$atributo=$valor;
    }
    public function __construct($row) {
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->email = $row['email'];
        $this->email_verified=$row['email_verified_at'];
        $this->password = $row['password'];
    }
   
    public function nuevoPerfil(){
        
    }
}
