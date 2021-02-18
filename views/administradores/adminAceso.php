<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar</title>
    <link rel="stylesheet" href="../assets/css/admin-aceso.css">
</head>
<body>
    <?php Utils::isAdminDenegado(); ?>
    <?php Utils::isAdmin(); ?>

        <form autocomplete="off" class="form-aceso-admin" method="POST" action="<?=base_url?>administrador/validarAdmin">
            <h1><a href="<?=base_url?>usuario/registro">Clave aceso</a></h1>
            <input type="text" name="clave">
            <input type="submit" value="aceso">
        </form>

    <?php require_once "./helpers/utilsJS.php"; ?>
</body>
</html>