<?php

require_once 'models/administrador.php';

class AdministradorController{
    public function index(){
      echo "<h1>Index administrador</h1>";  
    }

    public function registro(){
      require_once 'views/administradores/registro.php';
    }

    public function guardar(){
      if($_POST){
            
            $nombre_completo = isset($_POST['nombre_completo']) ? $_POST['nombre_completo'] : false;
            $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
            
            if(!isset($_SESSION)) { 
                session_start(); 
            }
            
            $errores = array();
            
            if(empty($nombre_completo)){
                $_SESSION['nombre_completo'][1] = "Nombre Vacio";
            }else if(!is_string($nombre_completo)){
                $_SESSION['nombre_completo'][2] = "Nombre no es texto";
            }else if(preg_match("/[0-9]/", $nombre_completo)){
                $_SESSION['nombre_completo'][3] = "Nombre contiene numeros";
            }else if(strlen($nombre_completo) < 5){
                $_SESSION['nombre_completo'][4] = "Nombre es menor a 5 caracteres";
            }

            if(isset($_SESSION['nombre_completo'])){
              $errores[1] = $_SESSION['nombre_completo'];
            }

            if(empty($correo)){
              $_SESSION['correo'][1] = "Correo vacio";
            }else if(!is_string($correo)){
              $_SESSION['correo'][2] = "El correo no es valido";
            }else if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
              $_SESSION['correo'][3] = "El correo no fue reconocido";
            }

            if(isset($_SESSION['correo'])){
              $errores[2] = $_SESSION['correo'];
            }
            
            if(empty($password)){
              $_SESSION['password'][1] = "contraseña vacia";
            }else if(!is_string($password)){
              $_SESSION['password'][2] = "La contraseña fue rechazada";
            }else if(strlen($password) < 8){
              $_SESSION['password'][3] = "La contraseña tiene menos de 8 caracteres";
            }

            if(isset($_SESSION['password'])){
              $errores[3] = $_SESSION['password'];
            }

            if(empty($direccion)){
              $_SESSION['direccion'][1] = "Direccion vacia";
            }else if(!preg_match("/[0-9]/", $direccion)){
              $_SESSION['direccion'][2] = "Direccion debe contener numeros";
            }else if(!is_string($direccion)){
              $_SESSION['direccion'][3] = "Direccion no es valida";
            }

            if(isset($_SESSION['direccion'])){
              $errores[4] = $_SESSION['direccion'];
            }

            var_dump($errores);
                      
            if(count($errores) >= 1){
                $_SESSION['register'] = "failed_admin";
                header("Location:".base_url.'administrador/registro');
                return $errores;
            }else{
                    $administradores = new Administrador();
                    $administradores->setNombre_completo($nombre_completo);
                    $administradores->setCorreo($correo);
                    $administradores->setDireccion($direccion);
                    $administradores->setPassword($password);
                    $guardar = $administradores->guardar();
                    
                    
                    if($guardar){
                        $_SESSION['register'] = "complete_admin";
                        header("Location:".base_url.'administrador/registro');
                    }
            }
        }else{
            header("Location:".base_url.'administrador/registro');
        }
      }

    function adminAceso(){
      require_once 'views/administradores/adminAceso.php';
    }
    
    function validarAdmin(){
        $clave_aceso = "FDSJ-CSIW-OVRK-LCWI-XKAN-KKLO-CJAQ-LLWO-CNVR-VNVV-XSLP-PHLP";

        if(!isset($_SESSION)) { 
          session_start(); 
        }

        $admin = "a";
        $admin_denegado = "d";

        if($_POST){
          $clave = $_POST['clave'];

          if(!empty($clave) && isset($clave)){

            if(is_string($clave) && $clave === $clave_aceso){
            
              $_SESSION['admin'] = $admin;
              header("Location:".base_url."administrador/registro");

              return $admin;
            
            }else{
              
              if(isset($_SESSION['admin_denegado'])){
                unset($_SESSION['admin_denegado']);
              }

              $_SESSION['admin_denegado'] = $admin_denegado;
              header("Location:".base_url."usuario/registro");
            
              return $admin_denegado;
            
            }

          }else{
              $_SESSION['admin_denegado'] = $admin_denegado;
              header("Location:".base_url."usuario/registro");
          }
        }else{
          $_SESSION['admin_denegado'] = $admin_denegado;
          header("Location:".base_url."usuario/registro");
        }
    }
  }