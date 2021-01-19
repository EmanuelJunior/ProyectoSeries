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
        return $this->password;
    }

    function setNombre_completo($nombre_completo) {
        $this->nombre_completo = $nombre_completo;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setPassword($password) {
        $this->password = $password;
    }
}
