<?php

class Capitulos{
    private $temporada_id;
    private $nombre_capitulo;
    private $sinopsis;
    private $imagen;
    private $video;
    private $duracion;
    private $db;
    
    public function __construct() {
    $this->db = Database::conexion();
    }
    
    function getTemporada_id() {
        return $this->temporada_id;
    }

    function getNombre_capitulo() {
        return $this->nombre_capitulo;
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

    function getDuracion() {
        return $this->duracion;
    }

    function setTemporada_id($temporada_id) {
        $this->temporada_id = $temporada_id;
    }

    function setNombre_capitulo($nombre_capitulo) {
        $this->nombre_capitulo = $nombre_capitulo;
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

    function setDuracion($duracion) {
        $this->duracion = $duracion;
    }
}

