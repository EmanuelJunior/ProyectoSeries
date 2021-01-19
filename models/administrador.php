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
        return $this->password;
    }

    function setNombre_completo($nombre_completo) {
        $this->nombre_completo = $nombre_completo;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setPassword($password) {
        $this->password = $password;
    }
}