<?php

class Pelicula{
    private $categoria_id;
    private $nombre_pelicula;
    private $director;
    private $sinopsis;
    private $imagen;
    private $video;
    private $fecha;
    private $duracion;
    private $db;
    
    public function __construct() {
        $this->db = Database::conexion();
    }
    
    function getCategoria_id() {
        return $this->categoria_id;
    }

    function getNombre_pelicula() {
        return $this->nombre_pelicula;
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

    function getVideo() {
        return $this->video;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getDuracion() {
        return $this->duracion;
    }

    function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    function setNombre_pelicula($nombre_pelicula) {
        $this->nombre_pelicula = $nombre_pelicula;
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

    function setVideo($video) {
        $this->video = $video;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setDuracion($duracion) {
        $this->duracion = $duracion;
    }
}