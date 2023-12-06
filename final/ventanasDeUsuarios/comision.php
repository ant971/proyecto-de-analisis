<?php
    include("../conn/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profesor.css">
    <title>Comision VIEX</title>
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
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <table>
            <tr></tr>
        </table>
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