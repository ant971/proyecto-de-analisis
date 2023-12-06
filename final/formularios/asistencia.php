<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Asistencia Tecnica Especializada</title>
</head>
<body>
<h1>FORMULARIO PARA EL REGISTRO Y CERTIFICACIÓN DE TRABAJOS DE EXTENSIÓN</h1>
<div class="contenedorDatos">
        <form class="datos">
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
        </form> <br>
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
<div class="asistencia">
        <label for="asistencia"><h2>Asistencia Tecnica Especializada</h2></label>
        <select name="tipo" id="tipo_asistencia">
            <option value="Publicacion">Consultoría</option>
            <option value="Asistencia tecnica">Asesoría</option>
        </select><br>
        <form class="datos">
            <label for="denominacion"> Denominación de la asistencia técnica (asesoría o consultoría)</label>
            <input type="text" id="denominacion" name="denominacion" required><br>
            <label for="colaboracion">colaboracion</label>
            <input type="text" id="colaboracion" name="colaboracion" required><br>
            <label for="descripcion">Descripcion del trabajo realizado (Puntos principales):</label>
            <input type="text" id="descripcion" name="descripcion" required><br>
            <label for="ojbetivos">Objetivos:</label>
            <input type="text" id="objetivos" name="objetivos" required><br>
            <label for="metodologia">metodologia</label>
            <input type="text" id="metodologia" name="metodologia" required><br>
            <label for="evidencias"> Evidencias de la asignación (Nota de asignación, un resumen de la labor realizada y
                nota o certificación de la
                labor realizada en la asistencia)
            </label>
            <input type="text" id="evidencias" name="evidencias" required>
            <label for="fecha">fecha:</label>
            <input type="text" id="fecha" name="fecha" required><br>
        </form>
    </div>
</body>
</html>