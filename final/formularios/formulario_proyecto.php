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
            <li><a href="index.html">Inicio</a></li>
            <li><a href="informacion.html">Informacion</a></li>
            <li><a href="#">Contactanos</a></li>
        </ul>
    </nav> <br>
    <h2>Formulario de solicitud</h2><br>
    <div class="opciones">
        <label for="tipo_trabajo">elija el tipo de trabajo de extensión que se entrega para registro y calificación
            <select name="Tipo" id="tipo_trabajo">
                <option value="Proyecto de extensión">A. Proyecto de Extensión</option>
                <option value="Actividad de extensión">B. Actividad de Extensión</option>
                <option value="Publicacion">C. Publicación</option>
                <option value="Asistencia tecnica">D. Asistencia Técnica</option>
            </select>
        </label>
        <br>
    </div>
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
    </div>
    <div class="proyecto_extension">
        <label for="proyecto_extension"> ACTIVIDAD DE EXTENSIÓN: (distinta de la Asistencia Técnica
            Especializada)</label>
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
    <div class="asistencia">
        <label for="asistencia">Asistencia Tecnica Especializada</label>
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
    <div class="publicacion">
        <label for="publicacion">Publicaciones</label>
        <form class="datos">
            <label for="presentacion">Presentacion:</label>
            <input type="text" id="presentacion" name="presentacion" required><br>
            <label for="justificacion">justificacion</label>
            <input type="text" id="justificacion" name="justificacion" required><br>
            <label for="fecha">fecha:</label>
            <input type="text" id="fecha" name="fecha" required><br>
        </form>
    </div>
    <div class="envio">
        <input type="submit" value="Enviar">
    </div>
</body>
</html>