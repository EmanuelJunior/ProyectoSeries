<?php

class Pago{
    private $planes_id;
    private $nombre_tarjeta;
    private $numero_tarjeta;
    private $dinero;
    private $password_seguridad;
    private $db;
    
    public function __construct() {
        $this->db = Database::conexion();
    }
    
    function getPlanes_id() {
        return $this->planes_id;
    }

    function getNombre_tarjeta() {
        return $this->nombre_tarjeta;
    }

    function getNumero_tarjeta() {
        return $this->numero_tarjeta;
    }

    function getDinero() {
        return $this->dinero;
    }

    function getPassword_seguridad() {
        return $this->password_seguridad;
    }

    function setPlanes_id($planes_id) {
        $this->planes_id = $planes_id;
    }

    function setNombre_tarjeta($nombre_tarjeta) {
        $this->nombre_tarjeta = $nombre_tarjeta;
    }

    function setNumero_tarjeta($numero_tarjeta) {
        $this->numero_tarjeta = $numero_tarjeta;
    }

    function setDinero($dinero) {
        $this->dinero = $dinero;
    }

    function setPassword_seguridad($password_seguridad) {
        $this->password_seguridad = $password_seguridad;
    }
}

