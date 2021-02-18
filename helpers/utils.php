<?php

class Utils {

    static function eliminar($name) {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }

        return $name;
    }

    static function isAdmin(){
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin_denegado']);
            header("Location:".base_url."administrador/registro");
        }
    }

    static function isAdminDenegado(){
        if(isset($_SESSION['admin_denegado'])){
            unset($_SESSION['admin']);
            header("Location: ".base_url."usuario/registro");
        }
    }

    static function ifNotAdmin(){
        if(!isset($_SESSION['admin_denegado']) && !isset($_SESSION['admin'])){
            header("Location: ".base_url."usuario/registro");
        }   
    }

}
