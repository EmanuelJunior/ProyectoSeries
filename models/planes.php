<?php

class Planes{
    private $nombre_plan;
    private $tiempo_duracion;
    private $precio;
    private $beneficios;
    private $db;
    
    public function __construct() {
        $this->db = Database::conexion();
    }
    
    function getNombre_plan() {
        return $this->nombre_plan;
    }

    function getTiempo_duracion() {
        return $this->tiempo_duracion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getBeneficios() {
        return $this->beneficios;
    }

    function setNombre_plan($nombre_plan) {
        $this->nombre_plan = $nombre_plan;
    }

    function setTiempo_duracion($tiempo_duracion) {
        $this->tiempo_duracion = $tiempo_duracion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setBeneficios($beneficios) {
        $this->beneficios = $beneficios;
    }
}

