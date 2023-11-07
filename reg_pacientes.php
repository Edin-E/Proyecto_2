<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>REGISTRO DE PACIENTES</title>
</head>
<body>
    <h1>Registro de Pacientes</h1>
    <form method="post" class="patient-form">
        <div class="input-container">
            <label for="dpi">DPI del paciente:</label>
            <input type="text" name="dpi" id="dpi" placeholder="Ejemplo: 1234567890123">
        </div>
        <div class="input-container">
            <label for="nombre">Nombre del paciente:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ejemplo: Juan Pérez">
        </div>
        <div class="input-container">
            <label for="edad">Edad:</label>
            <input type="text" name="edad" id="edad" placeholder="Ejemplo: 30">
        </div>
        <div class="input-container">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" placeholder="Ejemplo: Calle 123, Ciudad">
        </div>
        <div class="input-container">
            <label for="razon">Razón:</label>
            <input type="text" name="razon" id="razon" placeholder="Ejemplo: Consulta médica">
        </div>
        <div class="input-container">
            <label for="receta">Receta:</label>
            <input type="text" name="receta" id="receta" placeholder="Ejemplo: Paracetamol">
        </div>
        <div class="input-container">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" placeholder="Ejemplo: 1234567890">
        </div>
        <div class="input-container">
            <label for="otros">Otros:</label>
            <input type="text" name="otros" id="otros" placeholder="Ejemplo: Información adicional">
        </div>
        <input type="submit" name="registrar" value="Registrar">
        <a href="pac_reg.php" class="redireccionar-link">Ver Pacientes Registrados</a>
        <a href="index.html" class="button">Volver a la Página de Inicio</a>
    </form>
    <?php
    include("procesar_registro.php"); 
    ?>
</body>
</html>