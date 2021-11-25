<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededatos="formulario";



$enlace = mysqli_connext($servidor,$usuario,$clave,$basededatos);

if(!$enlace){
    echo"Error con el servidor";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contacto</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/estilos.css">
        <link rel="stylesheet" href="/css/fontello.css">
        <link rel="stylesheet" href="/css/normalize.css">   
        <link rel="icon" type="image/png" href="/img/logo_small_icon_only_inverted.png">
    </head>
    <body>
        
        <header >
            <div class="contenedor">
            <h1 class="icon-monitor"> SW & HW San. </h1>
            <input type="checkbox" id="menu-bar">
            <label class="icon-th-list" for="menu-bar"></label>
            <nav class="menu">
                <a href="/index.html">Inicio</a>
            <a href="/ubicacion.html">ubicacion</a>
            <a href="/contacto.html">Contacto</a>
            <a href="/productos.html">Productos</a>
            </nav>
            </div>
            </header>

            <main class="contenedor-sombra">
                <h2>Contactanos</h2>
        <div class="planes">
            
            <section class="contacto">
                <h3>Via correo</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <rect x="3" y="5" width="18" height="14" rx="2" />
                        <polyline points="3 7 12 13 21 7" />
                      </svg>
                </div>
                <p>Correo: ventas.autocar@gmal.com.</p>
            </section>
            <section class="contacto">
                <h3>Via facebook</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                      </svg>
                </div>
                <p>AutoCAR ofical.</p>
            </section>
            <section class="contacto">
                <h3>Via telefonica</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                        <path d="M15 7a2 2 0 0 1 2 2" />
                        <path d="M15 3a6 6 0 0 1 6 6" />
                      </svg>
                   
                </div>
                <p>Lunes a viernes de 9:00 a 20:00 .</p>
                <p>55 10909512</p>
            </section>
        </div>
        <section class="plan">
            <h2>Contacto</h2>
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                    <line x1="8" y1="9" x2="16" y2="9" />
                    <line x1="8" y1="13" x2="14" y2="13" />
                  </svg>
            </div>

            <form action="" class="formulario">
                <h1 class="Formulario_titulo">Contactanos</h1>
                <input type="text" class="formulario_input">
                <label for="" class="formulario_label">Nombre</label>
                <input type="text" class="formulario_input">
                <label for="" class="formulario_label">Apellido</label>
                <input type="text" class="formulario_input">
                <label for="" class="formulario_label">Correo</label>
                <input type="text" class="formulario_input">
                <label for="" class="formulario_label">Telefono</label>
                <input type="text" class="formulario_input">
                <label for="" class="formulario_label">Mensaje</label>
                <input type="submit" class="formulario_submit">
                </form>
                   


</main>




</body>
<footer>
    <div class="contenedor">
        <p class="copy">SW & HW San. &copy; 2021</p>
        <div class="sociales">
            <a href="https://www.facebook.com/">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                  </svg></a>
            <a href="https://www.tiktok.com/es/">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tiktok" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 12a4 4 0 1 0 4 4v-12a5 5 0 0 0 5 5" />
                </svg> </a>
            <a href="https://twitter.com/?lang=es">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                  </svg></a>
                  <a href="https://www.whatsapp.com/?lang=es">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                      </svg>
                      <a href="https://www.pscp.tv/">
                    </a>
        </div>
    </div>
    
    </footer>
   
<script src="form.js"></script>   


</html>
<?php
if(isset($_POST['enviar'])){
    $conexion = mysqli_connect('localhost', "root" ,"");
    $nombre=$_POST["Nombre"];
    $apellidos=$_POST["Apellido"];
    $correo=$_POST["Correo"];
    $telefono=$_POST["Telefono"];
    $telefono=$_POST["Enviar"];
    $id= rand(1,99);
    $insertardatos = "INSERT INTO datos VALUES('$Nombre' '$Apellido' '$Correo' '$Telefono' '$Enviar' 'id')";

    $ejecutarInsertar =mysql_query($enlace, $insertardatos);
                                                  
    if(!ejecuutarInsertar){
        echo"ERROR EN LA BASE DE DATOS";
    }
     
}



?>