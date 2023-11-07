<?php
include("conex2.php");

$id = $_GET['id'];
$eliminar = "DELETE FROM prueba3 WHERE id_doctor = '$id'";

$resultadoEliminar = mysqli_query($conex2, $eliminar);

if ($resultadoEliminar) {
    header("Location: edicion2.php");
} else {
    echo "<script>alert('No se puede eliminar'); window.history.go(-1);</script>";
}
