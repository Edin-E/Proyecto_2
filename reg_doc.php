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
    <h1>Registro de Doctores</h1>
    <form method="post" class="patient-form">
    <div class="input-container">
        <label for="Doctor">Nombre del Doctor:</label>
        <input type="text" name="Doctor" id="Doctor" placeholder="Ejemplo: Juan Pérez">
    </div>
    <div class="input-container">
        <label for="Colegiado">Numero de colegiado:</label>
        <input type="text" name="Colegiado" id="Colegiado" placeholder="Ejemplo: 3543540">
    </div>
    <div class="input-container">
        <label for="Especialidad">Especialidad:</label>
        <input type="text" name="Especialidad" id="Especialidad" placeholder="Ejemplo: Cardiologia">
    </div>
    <div class="input-container">
        <label for="Diagnostico">Diagnostico:</label>
        <input type="text" name="Diagnostico" id="Diagnostico" placeholder="Ejemplo: Consulta médica">
    </div>
    <div class="input-container">
        <label for="otros">Otros:</label>
        <input type="text" name="otros" id="otros" placeholder="Ejemplo: Información adicional">
    </div>
    <input type="submit" name="agregar" value="Registrar">
    <a href="doc_reg.php" class="redireccionar-link">Ver Doctores Registrados</a>
    <a href="index.html" class="button">Volver a la Página de Inicio</a>
</form>

    <?php
    include("doctores_registro.php"); 
    ?>
</body>
</html>