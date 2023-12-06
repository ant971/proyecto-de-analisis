<?php
session_start();
$usuarios = array("usuario1" => "contraseña1", "usuario2" => "contraseña2");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $contraseña){
        $_SESSION["usuario"] = $usuario;
        header("Location: inicioSesion.html");
        exit();
    }else{
        $mensaje = "usuario o contraseña incorrectos";
    }
}
?>