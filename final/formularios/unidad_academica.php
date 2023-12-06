<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Unidad Academica</title>
</head>
<body>
    <h1>Unidad Academica</h1>
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
    <div class="unidad">
        <label for="extension">Proyecto de Unidad Academica</label>
        <p>Datos del Proyecto</p>    
    </div>
        <form class="datos">
            <label for="descripcion">Descripcion:</label>
            <input type="text" id="descripcion" name="descripcion" required><br>
            <label for="justificacion">Justificacion:</label>
            <input type="text" id="justificacion" name="justificacion" required><br>
            <label for="ojbetivos">Objetivos generales:</label>
            <input type="text" id="objetivos" name="objetivos" required><br>
            <label for="ojbetivos">Objetivos Especificos:</label>
            <input type="text" id="objetivos" name="objetivos" required><br>
            <label for="alcance">Alcance del Proyecto</label>
            <input type="text" id="alcance" name="alcance" required> <br>
            <label for="plan">Plan de recursos materiales y humanos del proyecto</label>
            <input type="text" id="plan" name="plan" required> <br>
            <label for="cronograma">Cronograma</label>
            <input type="text" id="cronograma" name="cronograma" required> <br>
            <label for="costos">Plan de costos por actividad</label>
            <input type="text" id="costos" name="costos" required> <br>
            <label for="comunicacion">Plan de comunicaciones</label>
            <input type="text" id="comunicacion" name="comunicacion" required> <br>
            <label for="beneficiario">Beneficiarios de los resultados del proyecto</label>
            <input type="text" id="beneficiario" name="beneficiario" required> <br>
            <label for="relaciones">Indicar si existen relaciones con otras instituciones para la realizacion del
                proyecto:</label>
            <input type="text" id="relaciones" name="relaciones" required><br>
        </form>
</body>
</html>