<?php
    include("../conn/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profesor.css">
    <title>Profesor</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="../ventanas_principales/index.php">Inicio</a></li>
            <li><a href="informacion.html">Informacion</a></li>
            <li><a href="#">Contactanos</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a class="usuario" href="#">Username</a></li>
        </ul>
    </nav>
    <br>
    <p>calendario</p>
    <div class="calendario">  
    </div> 
        <div class="caja-proyectos">
            <p>Consultar Proyectos</p> <br>
            <div class="ver_proyecto">
                <button> Proyectos</button>
            </div> 
            <br>
        </div>
    <br>
    <div class="publicacion">
        <div class="form">
        <form class="Registro">
            <h2>Seleccione el tipo de proyecto que desea solicitar</h2><br>
            <p>Proyecto Institucional <a href="../formularios/proyecto_institucional.php">Click Aqui</a></p><br>
            <p>Proyecto de Unidad Academica <a href="../formularios/unidad_academica.php">Click Aqui</a></p><br>
            <p>Proyecto de Servicio Social<a href="../formularios/servicio_social.php">Click Aqui</a></p><br>
            <p>Actividad de Extension <a href="../formularios/actividad_extension.php">Click Aqui</a></p><br>
            <p>Asistencia Tecnica <a href="../formularios/asistencia.php">Click Aqui</a></p><br>
            <p>Publicacion <a href="../formularios/publicacion.php">Click Aqui</a></p><br>
            <br>
            <div class="envio">
                <button>Guardar Cambios</button>
            </div>
        </form>
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