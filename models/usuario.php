<?php

class Usuario{
    private $nombre_completo;
    private $celular;
    private $correo;
    private $password;
    private $db;

    public function __construct() {
        $this->db = Database::conexion();
    }

    function getNombre_completo() {
        return $this->nombre_completo;
    }

    function getCelular() {
        return $this->celular;
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

    function setCelular($celular) {
        $this->celular = $this->db->real_escape_string($celular);
    }

    function setCorreo($correo) {
        $this->correo = $this->db->real_escape_string($correo);
    }

    function setPassword($password) {
        $this->password = $password;
    }
    
    public function guardar(){
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre_completo()}', {$this->getCelular()}, '{$this->getCorreo()}', '{$this->getPassword()}')";
        $guardar = $this->db->query($sql);
        
        $resultado = false;
        if($gurdar){
            $resultado = true;
        }
        
        return $resultado;
    }
}
