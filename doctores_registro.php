<?php
include("conex2.php");


if (isset($_POST['agregar'])) {
    if (strlen($_POST['Doctor']) >= 1 &&
        strlen($_POST['Colegiado']) >= 1 &&
        strlen($_POST['Especialidad']) >= 1 &&
        strlen($_POST['Diagnostico']) >= 1 &&
        strlen($_POST['otros']) >= 1
    ) {
        $Doctor = trim($_POST['Doctor']);
        $Colegiado = trim($_POST['Colegiado']);
        $Especialidad = trim($_POST['Especialidad']);
        $Diagnostico = trim($_POST['Diagnostico']);
        $otros = trim($_POST['otros']);
        $consulta = "INSERT INTO prueba3 (Doctor, Colegiado, Especialidad, Diagnostico, otros) VALUES ('$Doctor','$Colegiado','$Especialidad','$Diagnostico','$otros')";
        $resultado = mysqli_query($conex2, $consulta);

        if ($resultado) {
            echo '<h3 class="ok">El Doctor está registrado correctamente</h3>';
        } else {
            echo '<h3 class="bad">Ha ocurrido un error</h3>';
        }
    } else {
        echo '<h3 class="bad">Complete los campos</h3>';
    }
}
?>
