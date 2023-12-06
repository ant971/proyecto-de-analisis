<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Publicacion</title>
</head>
<body>
<h1>FORMULARIO PARA EL REGISTRO Y CERTIFICACIÓN DE TRABAJOS DE EXTENSIÓN</h1>
<?php
    if (isset($_POST['submit'])) {
        // Obtener los valores del formulario
        $titulo = $_POST['titulo'];
        $facultad = $_POST['facultad'];
        $sede = $_POST['sede'];
        $departamento = $_POST['departamento'];
        $escuela = $_POST['escuela'];
        $responsable = $_POST['responsable'];
        $participantes = $_POST['participantes'];
        $correoParticipantes = $_POST['correo_participantes'];
        $duracion = $_POST['duracion'];
        $presentacion = $_POST['presentacion'];
        $justificacion = $_POST['justificacion'];
        $fecha = $_POST['fecha'];
    $consulta2 = ("INSERT INTO publicacion (presentacion, justificacion, fecha) 
    VALUES ('$presentacion','$justificacion','$fecha')");
    $consulta3 = ("INSERT INTO proyecto (titulo, facultad, sede, departamento, escuela)
    VALUES ( '$titulo', '$facultad', '$sede', '$departamento', '$escuela')");
    $resultado = mysqli_query($conexion, $consulta2, $consulta3);
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
?> 
<nav>
        <ul class="menu">
            <li><a href="../ventanas_principales/index.php">Inicio</a></li>
            <li><a href="#">Informacion</a></li>
        </ul>
    </nav>
<!--<form class="datos">
<p>Datos del Profesor</p>
<label for="nombre">Nombre:</label>
<input type="text" id="nombre" name="nombre" required><br>
<label for="apellido">Apellido:</label>
<input type="text" id="apellido" name="Apellido" required> <br>
<label for="cedula">Cedula:</label>
<input type="text" id="cedula" name="Cedula" required><br>
<label for="codigo">Codigo del profesor:</label>
<input type="text" id="codigo" name="Codigo del profesor" required><br>
<label for="telefono">Telefono:</label>
<input type="text" id="telefono" name="Telefono" required><br>
<label for="oficina">Oficina:</label>
<input type="text" id="oficina" name="Oficina" required><br>
<label for="correo">Correo electronico:</label>
<input type="text" id="correo" name="Correo electronico" required><br>
</form> <br>-->
<div class="contenedorDatos">
        
        <form class="datos">
            <p>Datos del Proyecto</p>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="Titulo" required><br>
            <label for="facultad">Facultad:</label>
            <input type="text" id="facultad" name="facultad" required><br>
            <label for="sede">Sede:</label>
            <input type="text" id="sede" name="sede" required><br>
            <label for="departamento">Departamento</label>
            <input type="text" id="departamento" name="departamento" required><br>
            <label for="escuela">Escuela:</label>
            <input type="text" id="escuela" name="escuela" required><br>
            <label for="responsable">Responsable Principal</label>
            <input type="text" id="responsable" name="responsable" required><br>
            <label for="participantes">Participantes o colaboradores</label>
            <input type="text" id="participantes" name="participantes" required><br>
            <label for="correo">Correo electronico:</label>
            <input type="text" id="participantes" name="participantes" required><br>
            <label for="fecha">Duración</label>
            <input type="text" id="duracion" name="duracion" required><br>
        </form>
    </div>
    <br>
    <div class="publicacion">
        <label for="publicacion">Publicaciones</label>
        <form class="datos">
            <label for="presentacion">Presentar publicacion:</label>
            <input type="text" id="presentacion" name="presentacion" required><br>
            <label for="justificacion">justificacion</label>
            <input type="text" id="justificacion" name="justificacion" required><br>
            <label for="fecha">fecha:</label>
            <input type="text" id="fecha" name="fecha" required><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <div class="envio">

    </div>
</body>
</html>