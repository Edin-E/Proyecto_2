<?php
include("conex.php");


if (isset($_POST['registrar'])) {
    if (strlen($_POST['dpi']) >= 1 &&
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['edad']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['razon']) >= 1 &&
        strlen($_POST['receta']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['otros']) >= 1
    ) {
        $dpi = trim($_POST['dpi']);
        $nombre = trim($_POST['nombre']);
        $edad = trim($_POST['edad']);
        $direccion = trim($_POST['direccion']);
        $razon = trim($_POST['razon']);
        $receta = trim($_POST['receta']);
        $telefono = trim($_POST['telefono']);
        $otros = trim($_POST['otros']);
        $consulta = "INSERT INTO prueba2 (dpi, nombre, edad, direccion, razon, receta, telefono, otros) VALUES ('$dpi','$nombre','$edad','$direccion','$razon','$receta','$telefono','$otros')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            echo '<h3 class="ok">El paciente está registrado correctamente</h3>';
        } else {
            echo '<h3 class="bad">Ha ocurrido un error</h3>';
        }
    } else {
        echo '<h3 class="bad">Complete los campos</h3>';
    }
}
?>
