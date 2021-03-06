<?php
session_start();
require_once 'config/conexion.php';
require_once 'helpers/utils.php';
require_once 'autoload.php';
require_once 'config/parametros.php';

function show_error(){
    $error = new errorController();
    $error->index();
}

//Controlador frontal se llama lo que hacemos a continuacion porque se encarga de cargar todo por medio de la url
if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller'; 
}else if(!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controlador = controller_default;
}else{
    show_error();
    die();
}


if (class_exists($nombre_controlador)){
    
    $controlador = new $nombre_controlador();
    
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else if(!isset($_GET['controller']) && !isset($_GET['action'])){
        $action_default = action_default;    
        $controlador->$action_default();
    }else{
        show_error();
    }

}else{
    show_error();
}
?>