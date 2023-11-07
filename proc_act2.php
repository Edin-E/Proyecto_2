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
include("conex2.php");

if (
    isset($_POST['Doctor']) &&
    isset($_POST['Colegiado']) && 
    isset($_POST['Especialidad']) &&
    isset($_POST['Diagnostico']) && 
    isset($_POST['otros']) && 
    isset($_POST['id_doctor'])
) {
    $Doctor = mysqli_real_escape_string($conex2, $_POST['Doctor']);
    $Colegiado = mysqli_real_escape_string($conex2, $_POST['Colegiado']);
    $Especialidad = mysqli_real_escape_string($conex2, $_POST['Especialidad']);
    $Diagnostico = mysqli_real_escape_string($conex2, $_POST['Diagnostico']);
    $otros = mysqli_real_escape_string($conex2, $_POST['otros']);
    $id = $_POST['id_doctor'];

    $actualizar = "UPDATE prueba3 SET Doctor='$Doctor', Colegiado='$Colegiado', Especialidad='$Especialidad', Diagnostico='$Diagnostico', otros='$otros' WHERE id_doctor='$id'";
    $resultado = mysqli_query($conex2, $actualizar);

    if ($resultado) {
        echo "<div class='message-container success-message'>Datos Actualizados</div>";
    } else {
        echo "<div class='message-container error-message'>Error al ejecutar la consulta: " . mysqli_error($conex2) . "</div>";
    }
    
    
}

// Agrega el cierre de PHP
?>
 
<!-- Puedes agregar un enlace o botón para que los usuarios regresen a la página de edición -->
<a href="edicion2.php" class="button">Volver a la página de edición</a>

