<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Proyecto Institucional</title>
</head>
<body>
<h1>FORMULARIO PARA EL REGISTRO Y CERTIFICACIÓN DE TRABAJOS DE EXTENSIÓN</h1><br>
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
    <div class="extension">
        <label for="extension">A1. Elija el tipo de Proyecto Institucional</label>
        <select name="tipo" id="extension">
            <option value="A">FORTALECIMIENTO INTEGRAL DE EXTENSION UNIVERSITARIA</option>
            <option value="B">ESTUDIO/DIAGNOSTICO SOBRE NECESIDADES DE EXTENSIÓN</option>
            <option value="C">PROG. INST. DE ATENCIÓN A GRUPOS DESFAVORECIDOS </option>
            <option value="D">VINCULACIÓN CON LOS GRADUADOS DE LA UP</option>
            <option value="E">CULTURA AMBIENTAL PARA EL DESARROLLO SOSTENIBLE</option>
        </select>
    </div> <br>
</body>
</html>