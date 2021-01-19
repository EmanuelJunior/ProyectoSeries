<?php

class Serie{
    private $nombre_serie;
    private $categoria_id;
    private $director;
    private $sinopsis;
    private $imagen;
    private $db;
    
    public function __construct() {
        $this->db = Database::conexion();
    }
    
    function getCategoria_id() {
        return $this->categoria_id;
    }

    function getNombre_serie() {
        return $this->nombre_serie;
    }

    function getDirector() {
        return $this->director;
    }

    function getSinopsis() {
        return $this->sinopsis;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    function setNombre_serie($nombre_serie) {
        $this->nombre_serie = $nombre_serie;
    }

    function setDirector($director) {
        $this->director = $director;
    }

    function setSinopsis($sinopsis) {
        $this->sinopsis = $sinopsis;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }
}