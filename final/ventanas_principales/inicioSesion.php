<?php
include("../conn/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sesion.css">
    <title>Iniciar Sesión</title>
</head>
<body>
<?php
session_start();
$usuarios = array("usuario1" => "contraseña1", "usuario2" => "contraseña2");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    if (isset($usuarios[$usuario]) && $usuarios[$contraseña] == $contraseña){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["contraseña"] = $contraseña; 
        header("Location: ventanasDeUsuarios/profesor.php");
        exit();
    }else{
        $mensaje = "Usuario o contraseña incorrectos";
    }
}
?>
    <nav>
        <ul class="menu">
            <li><a href="../ventanas_principales/index.php">Inicio</a></li>
            <li><a href="#">Informacion</a></li>
        </ul>
    </nav>
    <div class="form">
        <div class="login">
                <form class="login-form" method="post">
                    <input type="text" name="usuario" placeholder="email">
                    <input type="password" name="contraseña" placeholder="password">
                    <br>
                    <button type="button">LOGIN</button>
                    <p class="message"> ¿No estás registrado? <br>
                        <a href="registro.php">Crear cuenta</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>