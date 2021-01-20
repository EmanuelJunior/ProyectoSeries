<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="./assets/css/registro.css">
    <head>   
    <body>
        <div class="container-registro">
            <div class="header">+</div>
            <div class="nav">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Redes sociales</a></li>
                    <li><a href="#">Registro</a></li>
                    <li><a href="#">login</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Redes sociales</a></li>
                    <li><a href="#">Registro</a></li>
                    <li><a href="#">login</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Redes sociales</a></li>
                    <li><a href="#">Registro</a></li>
                    <li><a href="#">login</a></li>                   
                </ul>
            </div>

            <div class="item item-registro">


                <form action="<?= base_url ?>usuario/guardar" method="POST">
                    <h1>Registrate</h1>

                    <input type="text" name="nombre_completo" placeholder="nombre completo">
                    <input type="text" name="correo" placeholder="correo">
                    <input id="contraseña" type="password" name="password" placeholder="contraseña">
                    <input minlength="10" maxlength="10" type="number" name="celular" placeholder="celular">
                    <div><input id="checkbox" type="checkbox" onclick="mostrarContraseña()"><label>Mostrar contraseña</label></div>
                    <input type="submit" value="registrarse">

                </form>
                <div class="item item-logo">
                    <img src="./assets/img/registro.svg">
                </div>
            </div>

            <footer class="item-footer"><a href='#'>Derechos reservado a emanuel</a></footer>
        </div>

        <script src="./helpers/utils.js"></script>
    </body>
</html>

