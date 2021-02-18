<script> 
    let validar = null;

    class Utils {
        constructor() {
            this.contraseña = document.querySelector('#contraseña');
            this.checkbox = document.querySelector('#checkbox');
            this.nav = document.querySelector(".nav");
            this.button = document.querySelector('.header');
        }

        mostrarContraseña() {
            if (this.checkbox.checked === false){
                if(this.contraseña.type == "text") this.contraseña.setAttribute("type", "password");
            }else{
                if(this.contraseña.type == "password") this.contraseña.setAttribute("type", "text");
            }
        }

        click() {
            this.button.addEventListener("click", () => {
                if (this.nav.style.display == "none") this.nav.style.display = 'block';
                else this.nav.style.display = 'none';
            });
        }

        mouseleave() {
            this.nav.addEventListener("mouseleave", () => {
                this.nav.style.display = 'none';
            });
        }

        static showComplete(nombre) {
            const input = document.getElementById(nombre);
            const h1 = document.getElementById("registrarse");
            const item_logo = document.querySelector(".item-logo");
            const header = document.querySelector(".header")
            const footer = document.querySelector(".item-footer")
            const nav = document.querySelector(".nav")
            const submit = document.querySelector("#submit")

            input.style = 'border: 3px solid forestgreen;'
            nav.style = "background: darkgreen";
            h1.style = "color: forestgreen";
            item_logo.style = "background: forestgreen";
            header.style = "background: forestgreen";
            footer.style = "background: forestgreen";
            submit.style = "border: 3px solid forestgreen";
            submit.classList.add("enviar");
            submit.disabled = "disabled";

            input.placeholder = "Registro Completado";
            input.classList.toggle('complete_usuario');

            input.disabled = true;
        }

        static showCompleteAdmin(nombre){
            if(validar == true) {
                document.body.classList.add("register_complete");
                const input = document.getElementById(nombre);
                const submit = document.getElementById('submit');
                input.placeholder = "Registro Completado";
                input.disabled = true;
                submit.disabled = true;
                if(nombre == 'checkbox') input.disabled = true;
            }
        }
    }

    const ejecutarEventos = () => {
        const utils = new Utils();
        utils.click();
        utils.mouseleave();
    };

    const mostrarContraseña = () => {
        const utils = new Utils();
        utils.mostrarContraseña();
    }

    ejecutarEventos();

</script>

<script>
    function showError(nombre){
        const input = document.getElementById(nombre);
        const validar = document.getElementById("admin");
        const checkbox = document.getElementById('checkbox');

        if(nombre == "nombre_completo") input.placeholder = 'Error campo nombre';
        else input.placeholder = `Error campo ${nombre}`;

        if(!validar) input.classList.toggle('error');
        else input.classList.toggle('gris');

        input.disabled = "disabled";

            const logo = document.querySelector('#logo');
            const admin = document.querySelector('#admin');
            const boton = document.querySelector("#submit");

            logo.classList.add('item-admin-error');

            admin.classList.add('item-registro-admin-error');

            if(checkbox) checkbox.disabled = true;

            submit.disabled = true;
    }
</script>


<?php if (isset($_SESSION['register']) && $_SESSION['register'] == "complete") : ?>
    <script>
        Utils.showComplete("nombre_completo");
        Utils.showComplete("correo");
        Utils.showComplete("contraseña");
        Utils.showComplete("celular");
    </script>
    <meta http-equiv="Refresh" content="3;url=<?= base_url ?>usuario/registro">
<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == "failed") : ?>
    <script> console.info("Registro error"); </script>
<?php endif; ?>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == "complete_admin"): ?>
    <script>  
        validar = true 
        Utils.showCompleteAdmin("nombre_completo");
        Utils.showCompleteAdmin("correo");
        Utils.showCompleteAdmin("contraseña");
        Utils.showCompleteAdmin("direccion");
        Utils.showCompleteAdmin("checkbox");
    </script>
<meta http-equiv="Refresh" content="3;url=<?= base_url ?>usuario/registro">
<?php else: ?>
    <script>  validar = false </script>
<?php endif; ?>

<?php if (isset($_SESSION['nombre_completo'])) : ?>
    <!-- <script>validarUsuarios();</script> -->
    <script>showError('nombre_completo')</script>
<?php endif; ?>

<?php if (isset($_SESSION['correo'])) : ?>
    <script> showError('correo') </script>
<?php endif; ?>

<?php if (isset($_SESSION['password'])) : ?>
    <script> showError('contraseña') </script>
<?php endif; ?>

<?php if (isset($_SESSION['celular'])) : ?>
    <script> showError('celular') </script>
<?php endif; ?>

<?php if (isset($_SESSION['direccion'])) : ?>
    <script> showError('direccion') </script>
<?php endif; ?>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == "failed") : ?>
    <meta http-equiv="Refresh" content="2;url=<?= base_url ?>usuario/registro">
<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == "failed_admin") : ?>
    <meta http-equiv="Refresh" content="2;url=<?= base_url ?>administrador/registro">
<?php endif; ?>