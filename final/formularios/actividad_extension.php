<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Document</title>
</head>
<body>
<h1>ACTIVIDAD DE EXTENSIÓN: (distinta de la Asistencia Técnica Especializada)</h1>
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
        </form> 
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
<div class="proyecto_extension">
        <form class="datos">
            <label for="introduccion">Introducción (Planteamiento de la temática que ocupa):</label>
            <input type="text" id="introduccion" name="introduccion" required><br>
            <label for="justificacion">Justificación (aspectos innovadores y originales que la actividad aporta)</label>
            <input type="text" id="justificacion" required><br>
            <label for="ojbetivos">Objetivos generales y especificos:</label>
            <input type="text" id="objetivos" name="objetivos" required><br>
            <label for="metodologia">metodologia</label>
            <input type="text" id="metodologia" name="metodologia" required><br>
            <label for="fecha">Duración</label>
            <input type="text" id="duracion" name="duracion" required><br>
            <label for="costos">Plan de costos por actividad</label>
            <input type="text" id="costos" name="costos" required> <br>
            <label for="beneficiario">Beneficiarios de los resultados del proyecto</label>
            <input type="text" id="beneficiario" name="beneficiario" required> <br>
            <label for="documentos"> Texto o documento completo que avala la intervención </label>
            <input type="text" id="documentos" name="documentos" required> <br>
            <label for="relaciones">Indicar si existen relaciones con otras instituciones para la realizacion del
                proyecto:</label>
            <input type="text" id="relaciones" name="relaciones" required><br>
            <label for="comentarios">Comentarios de la actividad</label>
            <input type="text" id="comentarios" name="comentarios" required> <br>
        </form>
    </div>
    <br>
</body>
</html>