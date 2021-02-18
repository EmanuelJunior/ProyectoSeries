<?php

class Administrador{
    private $nombre_completo;
    private $direccion;
    private $correo;
    private $password;
    private $db;
    
    public function __construct() {
        $this->db = Database::conexion();
    }
    
    function getNombre_completo() {
        return $this->nombre_completo;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getPassword() {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    function setNombre_completo($nombre_completo) {
        $this->nombre_completo = $this->db->real_escape_string($nombre_completo);
    }

    function setDireccion($direccion) {
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    function setCorreo($correo) {
        $this->correo = $this->db->real_escape_string($correo);
    }

    function setPassword($password) {
        $this->password = $password;
    }

    public function guardar(){
        $sql = "INSERT INTO administradores VALUES(NULL, '{$this->getNombre_completo()}', '{$this->getDireccion()}', '{$this->getCorreo()}', '{$this->getPassword()}');";
        $guardar = $this->db->query($sql);
        
        $resultado = false;
        if($guardar){
            $resultado = true;
        }
        var_dump($sql);
        return $resultado;
    }
}