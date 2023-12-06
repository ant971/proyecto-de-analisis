<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Formulario</title>
</head>
<body>
    <h1>FORMULARIO PARA EL REGISTRO Y CERTIFICACIÓN DE TRABAJOS DE EXTENSIÓN</h1>
    <nav>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="informacion.html">Informacion</a></li>
            <li><a href="#">Contactanos</a></li>
        </ul>
    </nav> <br>
    <h2>Formulario de solicitud</h2><br>
    <h2>Datos Generales</h2>
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
            <p>Datos del Proyecto de Extensión</p>
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
            <input type="text" id="participantes1" name="participantes1" required><br>
            <label for="correo">Correo electronico:</label>
            <input type="text" id="correo" name="correo" required><br>
            <label for="fecha">Fecha de inicio</label>
            <input type="text" id="f_inicio" name="f_inicio" required><br>
            <label for="fecha">Fecha de terminación</label>
            <input type="text" id="f_final" name="f_final" required><br>
        </form>
    </div>
<br>
<h2>Elija el tipo de Proyectos de Extension</h2>
<div class="extension">
        <label for="extension">A1. Elija el tipo de Proyecto Institucional</label>
        <select name="tipo" id="extension">
            <option value="A">FORTALECIMIENTO INTEGRAL DE EXTENSION UNIVERSITARIA</option>
            <option value="B">ESTUDIO/DIAGNOSTICO SOBRE NECESIDADES DE EXTENSIÓN</option>
            <option value="C">PROG. INST. DE ATENCIÓN A GRUPOS DESFAVORECIDOS </option>
            <option value="D">VINCULACIÓN CON LOS GRADUADOS DE LA UP</option>
            <option value="E">CULTURA AMBIENTAL PARA EL DESARROLLO SOSTENIBLE</option>
        </select>
</div> 
<br>
<div class="unidad">
        <label for="extension">A2.Proyecto de Unidad Academica</label>
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
        <br>
    </div>
    <div class="boton">
    <button>ENVIAR</button>
    </div>
</body>
</html>