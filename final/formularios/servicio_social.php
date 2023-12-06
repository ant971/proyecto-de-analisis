<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Servicio Social</title>
</head>
<body>
    <h1>Servicio Social</h1><br>
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
    <div class="servicio">
        <label for="servicio">A3. Servicio Social</label>
            <select name="tipo" id="tipo_rol">
                <option value="coordinador1">coordinador</option>
                <option value="tutor1">tutor</option>
            </select><br>
        <form class="datos">
            <label for="coordinador">Profesor coordinador o tutor del trabajo de Servicio Social </label>
            <input type="text" id="coordinador" name="coordinador" required><br>
            <label for="estudiante">Estudiantes</label>
            <input type="text" id="estudiante" name="estudiante" required><br>
            <label for="descripcion">Descripcion resumida de la intervencion:</label>
            <input type="text" id="descripcion" name="descripcion" required><br>
            <label for="area"> Área de conocimiento con la que se relaciona el trabajo de Servicio Social:</label>
            <input type="text" id="area" name="area" required><br>
        </form>
    </div>
</body>
</html>