<?php
include("../conn/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Plataforma</title>
</head>
<body>
    <h1>Bienvenidos a: </h1>
                <nav>
                    <ul class="menu">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="informacion.html">Informacion</a></li>
                        <li><a href="inicioSesion.php">Iniciar Sesión</a></li>
                        <li><a href="../ventanas_principales/registro.php">Registrarse</a></li>
                    </ul>
                </nav>
                <div class="imagenes">
                <img class="logos" src="../imagenes/logoUniversidad.png" alt="logo-U">
                <img class="logos" src="../imagenes/logoFiec.jpeg" alt="logo-FIEC">
                </div>
<div class="formularios">
        <div class="formulario">
        <li><a href="#">Solicitar Proyecto</a></li>
        </div>
<br>
        <div class="formulario">
        <li><a href="#">Criterios</a></li>
        </div>
<br>
        <div class="formulario">
        <li><a href="ManualTrabajosExtension">Manual para Registrar</a></li>
        </div>
</div>
<footer class="pie">
    <div class="container">
        <div class="linea">
            <div class="col">
                <h4>Nosotros</h4>
                <ul>
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">servicios</a></li>
                    <li><a href="#">Politica de privacidad</a></li>
                    <li><a href="#">Otros proyectos y programas</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>Nuestras Redes</h4>
                <div class="redes">
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                    <a href="#">Whatsapp</a>
                </div>
            </div>
            <div class="col">
                <h4>Contactanos</h4>
                <ul>
                    <li><a href="#">Correo</a></li>
                    <li><a href="#">telefono</a></li>
                    <li><a href="#">Direccion</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>