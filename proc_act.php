<style>
    .message-container {
        margin: 20px;
        padding: 10px;
        border-radius: 5px;
        font-weight: bold;
        text-align: center;
    }

    .success-message {
        background-color: #4CAF50; /* Color de fondo verde para el mensaje de éxito */
        color: white; /* Texto blanco para el mensaje de éxito */
    }

    .error-message {
        background-color: #f44336; /* Color de fondo rojo para el mensaje de error */
        color: white; /* Texto blanco para el mensaje de error */
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #0074D9; /* Color de fondo para el botón */
        color: white; /* Texto blanco para el botón */
        text-decoration: none;
        border-radius: 10px;
        margin: 20px;
    }
    .button-container {
        text-align: center; /* Centrar el contenido en el contenedor */
    }
</style>

<?php
include("conex.php");

if (
    isset($_POST['dpi']) && 
    isset($_POST['nombre']) && 
    isset($_POST['edad']) &&
    isset($_POST['direccion']) && 
    isset($_POST['razon']) && 
    isset($_POST['receta']) &&
    isset($_POST['telefono']) && 
    isset($_POST['otros']) && 
    isset($_POST['id_paciente'])
) {
    $dpi = mysqli_real_escape_string($conex, $_POST['dpi']);
    $nombre = mysqli_real_escape_string($conex, $_POST['nombre']);
    $edad = mysqli_real_escape_string($conex, $_POST['edad']);
    $direccion = mysqli_real_escape_string($conex, $_POST['direccion']);
    $razon = mysqli_real_escape_string($conex, $_POST['razon']);
    $receta = mysqli_real_escape_string($conex, $_POST['receta']);
    $telefono = mysqli_real_escape_string($conex, $_POST['telefono']);
    $otros = mysqli_real_escape_string($conex, $_POST['otros']);
    $id = $_POST['id_paciente'];

    $actualizar = "UPDATE prueba2 SET dpi='$dpi', nombre='$nombre', edad='$edad', direccion='$direccion', razon='$razon', receta='$receta', telefono='$telefono', otros='$otros' WHERE id_paciente='$id'";
    $resultado = mysqli_query($conex, $actualizar);

    if ($resultado) {
        echo "<div class='message-container success-message'>Datos Actualizados</div>";
    } else {
        echo "<div class='message-container error-message'>Error al ejecutar la consulta: " . mysqli_error($conex) . "</div>";
    }
    
    
}

// Agrega el cierre de PHP
?>
 
<!-- Puedes agregar un enlace o botón para que los usuarios regresen a la página de edición -->
<a href="edicion.php" class="button">Volver a la página de edición</a>

