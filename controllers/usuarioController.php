<?php
#error_reporting(E_ALL ^ E_NOTICE);
require_once 'models/usuario.php';

class usuarioController{
    public function index(){
      echo "<h1>Index usuario</h1>";
    }
    
    public function registro(){
        require_once 'views/usuarios/registro.php';
    }
    
    public function guardar(){
        if($_POST){
            
            $nombre_completo = isset($_POST['nombre_completo']) ? $_POST['nombre_completo'] : false;
            $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            $celular = isset($_POST['celular']) ? $_POST['celular'] : false;
            
            if(!isset($_SESSION)) { 
                session_start(); 
            }
            
            $errores = array();
            $nombre_validado = false;
            $correo_validado = false;
            $password_validado = false;
            $celular_validado = false;
            
            if(!empty($nombre_completo) && is_string($nombre_completo) && !preg_match("/[0-9]/", $nombre_completo) && strlen($nombre_completo) > 3){
                $nombre_validado = true;
            }else{
                $_SESSION['nombre_completo'] = "nombre error";
                $errores['nombre'] = "error nombre";
            }
            
            if(!empty($correo) && is_string($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL) && (strpos($correo, "@gmail.com") || strpos($correo, "@hotmail.com"))){
                $correo_validado = true;
            }else{
                $_SESSION['correo'] = "correo correo";
                $errores['correo'] = "error correo";
            }
            
            if(!empty($password) && is_string($password) && strlen($password) >= 8){
                $password_validado = true;
            }else{
                $_SESSION['password'] = "contraseña error";
                $errores['password'] = "error password";
            }
            
            if(!empty($celular) && strlen($celular) == 10){
                $celular_validado = true;
            }else{
                $_SESSION['celular'] = "celular error";
                $errores['celular'] = "celular error";
            }
            
            var_dump($nombre_validado);
            var_dump($password_validado);
            var_dump($correo_validado);
            var_dump($celular_validado);
            var_dump($errores);
            
            if(count($errores) >= 1){
                $_SESSION['register'] = "failed";
                header("Location:".base_url.'usuario/registro');
            }else{
                    $usuario = new Usuario();
                    $usuario->setNombre_completo($nombre_completo);
                    $usuario->setCorreo($correo);
                    $usuario->setCelular($celular);
                    $usuario->setPassword($password);
                    
                    $guardar = $usuario->guardar();
                    
                    if($guardar){
                        $_SESSION['register'] = "complete";
                        header("Location:".base_url.'usuario/registro');
                    }
            }
        }else{
            header("Location:".base_url.'usuario/registro');
        }
    }
}