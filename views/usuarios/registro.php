<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: helvetica;
        }
        
        body{
            background: #333;
        }
        
        .container-registro{
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        
        .nav{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            height: 100vh;
            width: 50%;
            background: #444;
            align-content: end;
            justify-content: end;
            display: none;
            position: absolute;
        }
        
        .nav ul {
            width: 100%;
            height: 100%;
        }
        
        .nav ul li a{
            text-decoration: none;
            color: white;
            display: block;
            text-align: center;
        }
        
        .nav ul li{
            transition-property: background;
            transition-duration: 400ms;
            display: block;
            padding: 20px;
        }
        
        .nav ul li:hover{
            background: #222;
        }
        
        .item-registro{
            background: url(https://assets.nflxext.com/ffe/siteui/vlv3/7181d537-0325-4c66-aa5a-9bdc7ee0176c/1bdb6829-4a41-4480-ad37-badcf3e6b7b9/CO-es-20210111-popsignuptwoweeks-perspective_alpha_website_small.jpg);
            background-size: cover;
            padding: 20px;
            height: 425px;
            flex-grow: 2;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            place-content: center center;
        }
        
        .item-registro > form{
            display: block;
            background: #333;
            padding: 20px;
            height: 350px;
            border-radius: 5px;
        }
        
        .item-registro > form h1{
            color: #aaa;
            display: block;
            margin: 20px auto;
            padding-bottom: 5px;
            text-align: center;
            text-transform: uppercase;
        }
        
        .item-registro > form input[type='text'],
        .item-registro > form input[type='number'],
        .item-registro > form input[type='password']{
            display: block;
            margin: 20px auto auto auto;
            padding: 8px;
            border-radius: 30px;
            outline: none;
            width: 90%;
            background: transparent;
            border: 3px solid #aaa;
            color: #aaa;
            transition: box-shadow 500ms;
        }
        
        .item-registro > form input[type='checkbox']{
            display: block;
            float: right;
        }
        
        .item-registro > form input[type='text']:focus,
        .item-registro > form input[type='number']:focus,
        .item-registro > form input[type='password']:focus{
            color: #999;
            border-color: #ccc;
            box-shadow: 0 0 2px #aaa, 0 0 7px #aaa;
        }
        
        .item-registro > form input[type='submit']{
            display: block;
            margin: 25px auto;
            border-radius: 30px;
            padding: 6px;
            width: 40%;
            color: #aaa;
            background: transparent;
            border: 3px solid #aaa;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 500ms, color 500ms, box-shadow 800ms;
        }

        .item-registro > form input[type='submit']:hover{
            background-color: #aaa;
            color: #333;
            box-shadow: 0 0 3px #aaa, 0 0 8px #aaa, 0 0 13px #bbb;
        }
        
        .item-logo{
            background: darkred;
            color: wheat;
            padding: 20px;
            height: 50px;
            flex-grow: 1;
            flex-shrink: 0;    
            display: none;
        }
        
        .item-footer{
            background: #333;
            height: 50px;
        }
        
        .item-footer a{
            color: white;
            text-decoration: none;
            line-height: 50px;
            text-align: center;
            display: block;
            margin: auto;
        }
        
        .boton{
            background: #333;
            color: #fff;
            height: 10px;
            font-size: 30px;
            text-align: right;
            line-height: 10px;
            font-weight: bold;
            padding: 25px;
        }
        
        .boton::selection{
            background: transparent;
        }
    </style>
<head>   
<body>
    <div class="container-registro">
        <div class="boton">+</div>
        <div class="nav">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Redes sociales</a></li>
                <li><a href="#">Registro</a></li>
                <li><a href="#">Inicio seccion</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>

        <div class="item item-registro">

            
            <form action="<?=base_url?>usuario/guardar" method="POST">
                <h1>Registrate</h1>
                
                <input type="text" name="nombre_completo" placeholder="nombre completo">
                <input type="text" name="correo" placeholder="correo">
                <input id="contraseña" type="password" name="password" placeholder="contraseña"><input id="checkbox" type="checkbox" onclick="mostrarContraseña()">
                <input minlength="10" maxlength="10" type="number" name="celular" placeholder="celular">
                <input type="submit" value="registrarse">

            </form>
        </div>
        
        <div class="item item-logo">
            <img src="assets/img/registro.png">
        </div>
        
        <footer class="item-footer"><a href='#'>Derechos reservado a emanuel</a></footer>
    </div>

    <script>
        const contraseña = document.querySelector('#contraseña');
        const checkbox = document.querySelector('#checkbox');

        function mostrarContraseña(){
            if(checkbox.checked === true){
                contraseña.setAttribute("type","text");
            }else{
                contraseña.setAttribute("type","password");
            }
        }
        
        const button = document.querySelector('.boton');
        const nav = document.querySelector('.nav');
        
        button.addEventListener("click",()=>{
            if(nav.style.display == "none"){
                nav.style.display = 'block';
            }else{
                nav.style.display = 'none';
            }
        });
        
        nav.addEventListener("mouseleave",()=>{
            nav.style.display = 'none';
        });
        
    </script>
</body>
</html>

