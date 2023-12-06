<?php
include("../conn/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>Registro</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Informacion</a></li>
        </ul>
    </nav>
    <?php
    if(isset($_POST['registrar'])) { //comprobando los datos
    if(strlen($_POST['nombre'])>=1 && strlen($_POST['apellido']) >=1
    && strlen($_POST['cedula']) && strlen($_POST['telefono'])>=1
    && strlen($_POST['codigo'])>=1 && strlen($_POST['password'])>=1
    && strlen($_POST['email'])>=1) {
        $tipoUsuario = $_POST['tipo_usuario'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $oficina = $_POST['oficina'];
        $codigo = $_POST['codigo'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $puesto = $_POST['puesto'];
        if($tipoUsuario == "profesor"){
            $sql= "INSERT INTO profesor(Nombre, Apellido, Cedula, telefono, oficina, correo, codigo_p, password) 
        VALUES ('$nombre','$apellido','$cedula','$telefono','$oficina','$email','$codigo','$password')";
        }elseif($tipoUsuario == "miembro_comision"){//registrando un miembro de la comision
            $oficina = $_POST['oficina'];
            $sql= "INSERT INTO miembro_comision(Nombre, Apellido, Cedula, puesto, correo, password) 
        VALUES ('$nombre','$apellido','$cedula','$puesto','$email','$codigo','$password')";
        }elseif($tipoUsuario == "decano") {
            // Registrar un decano
            $sql= "INSERT INTO decano(Nombre, Apellido, Cedula, correo, oficina, codigo_p, password) 
        VALUES ('$nombre','$apellido','$cedula','$email','$oficina','$codigo','$password')";
        }
        $resultado= mysqli_query($conexion, $sql);
        if($resultado){
            echo " <script language='Javascript'>
            alert('Los datos fueron ingresados exitosamente');
            location.assign('inicioSesion.php');
            </script>";
        }else
        echo " <script language='Javascript'>
        alert('ha ocurrido un error');
        </script>";
    }else 
    echo "complete los campos";
    }
    ?>
    <div class="form">
        <form class="registro" method="post">
            <form class="login-form">
                <select name="tipo_usuario">
                <option value="profesor">Profesor</option>
                <option value="miembro_comision">Miembro de la Comisión</option>
                <option value="decano">Decano</option>
                </select>
                <input type="text" name="nombre" placeholder="name" />
                <input type="text" name="apellido" placeholder="apellido" />
                <input type="text" name="cedula" placeholder="cedula"/>
                <input type="text" name="telefono" placeholder="telefono" />
                <input type="text" name="codigo" placeholder="codigo" />
                <input type="text" name="oficina" placeholder="oficina" />
                <input type="password" name="password" placeholder="password" />
                <input type="text" name="email" placeholder="email" />
                <button name="registrar">ENVIAR</button>
                <p class="message"> ¿Ya estás registrado? <br>
                    <a href="inicioSesion.php">Inicia Sesión</a>
                </p>
            </form>
        </form>
</div>
</body>
</html>