<?php

require_once 'models/usuario.php';

class UsuarioController{
    public function index(){
      echo "<h1>Index usuario</h1>";
    }
    
    public function registro(){
        require_once 'views/usuarios/registro.php';
    }
    
    public function guardar(){
        if($_POST){
            if($_POST['nombre_completo']){
                $cadena = 'Nombre: '.$_POST['nombre_completo'].'<br>';
            }

            if($_POST['correo']){
                $cadena .= 'Correo: '.$_POST['correo'].'<br>';
            }
            
            if($_POST['password']){
                $cadena .= 'Contraseña: '.$_POST['password'].'<br>';
            }
            
            if($_POST['celular']){
                $cadena .= 'Celular: '.$_POST['celular'].'<br>';
            }            
            echo $cadena;
        }
        
    }
}