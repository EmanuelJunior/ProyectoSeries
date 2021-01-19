<?php

class CategoriaSeries{
    private $administrador_id;
    private $nombre_categoria;
    private $db;
    
    public function __construct() {
        $this->db = Database::conexion();
    }
    
    function getAdministrador_id() {
        return $this->administrador_id;
    }

    function getNombre_categoria() {
        return $this->nombre_categoria;
    }

    function setAdministrador_id($administrador_id) {
        $this->administrador_id = $administrador_id;
    }

    function setNombre_categoria($nombre_categoria) {
        $this->nombre_categoria = $nombre_categoria;
    }
}

