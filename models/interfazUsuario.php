<?php

class InterfazUsuario{
    private $usuario_id;
    private $nombre_usuario;
    private $imagen;
    private $db;
    
    public function __construct() {
        $this->db = Database::conexion();
    }
    
    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getNombre_usuario() {
        return $this->nombre_usuario;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setNombre_usuario($nombre_usuario) {
        $this->nombre_usuario = $nombre_usuario;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }
}

