<?php
include("conex.php");

$id = $_GET['id'];
$eliminar = "DELETE FROM prueba2 WHERE id_paciente = '$id'";

$resultadoEliminar = mysqli_query($conex, $eliminar);

if ($resultadoEliminar) {
    header("Location: edicion.php");
} else {
    echo "<script>alert('No se puede eliminar'); window.history.go(-1);</script>";
}
