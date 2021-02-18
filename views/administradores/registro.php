<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro administradores</title>
    <link rel="stylesheet" href="../assets/css/registro.css">
</head>
<body>

<?php Utils::ifNotAdmin(); ?>
<?php Utils::isAdminDenegado(); ?>

<div class="container-registro container-admin" id="admin">

            <div class="item-registro item-registro-admin">                                 

                <div class="item-logo item-admin" id="logo">
                    <img src="../assets/img/registro-admin.svg">
                </div>

                <form autocomplete="off" id="form" action="<?=base_url?>administrador/guardar" method="POST">
                    
                <h1 id="registrarse">Admin</h1>

                    <input id="nombre_completo" type="text" name="nombre_completo" placeholder="nombre completo">
                    <input id="correo" type="text" name="correo" placeholder="correo">
                    <input id="contraseña" type="password" name="password" placeholder="contraseña">
                    <input id="direccion" type="text" name="direccion" placeholder="direccion">
                    <div><input id="checkbox" type="checkbox" onclick="mostrarContraseña()"><label>Mostrar contraseña</label></div>
                    <input id="submit" type="submit" value="registrarse" id="submit">

                </form>

            </div>
        </div>


        <?php require_once "./helpers/utilsJS.php"; ?>

        <?php Utils::eliminar("register"); ?>
        <?php Utils::eliminar("nombre_completo"); ?>
        <?php Utils::eliminar("correo"); ?>
        <?php Utils::eliminar("password"); ?>
        <?php Utils::eliminar("direccion"); ?>
</body>
</html>