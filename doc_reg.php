<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <div class="table__title"> <a href="edicion2.php" class="redireccionar-link">Editar</a></div>
<a href="reg_doc.php" class="redireccionar-link">Volver</a>
</head>
<body>
    <table class="data-table">
        <thead>
            <tr>
                <th>Doctor</th>
                <th>Colegiado</th>
                <th>Especialidad</th>
                <th>Diagnostico</th>
                <th>Otros</th>
            </tr>
        </thead>
        <tbody>
<?php
include("conex2.php");
$consulta = "SELECT * FROM prueba3";
$resultado = mysqli_query($conex2, $consulta);
$numero = mysqli_num_rows($resultado);
?>
<h5 class="card-title">Resultados (<?php echo $numero; ?>)</h5>

<?php
$num = 0;
if ($conex2) {
    
    if ($resultado) {
        
                while ($row = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $row["Doctor"] . "</td>";
                    echo "<td>" . $row["Colegiado"] . "</td>";
                    echo "<td>" . $row["Especialidad"] . "</td>";
                    echo "<td>" . $row["Diagnostico"] . "</td>";
                    echo "<td>" . $row["Otros"] . "</td>";
                    echo "</tr>";
        }
       
    } else {
        echo 'Error en la consulta: ' . mysqli_error($conex2);
    }
} else {
    echo 'Error en la conexión a la base de datos';
}
?>
<div class="table__title"> <a href="edicion2.php" class="redireccionar-link">Editar</a></div>
<a href="reg_doc.php" class="redireccionar-link">Volver</a>
</tbody>
</table>

</body>
</html>
