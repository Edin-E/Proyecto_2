<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<div class="table__title"> <a href="edicion.php" class="redireccionar-link">Editar</a></div>
<a href="reg_pacientes.php" class="redireccionar-link">Volver</a>
<body>

    <table class="data-table">
        <thead>
            <tr>
                <th>DPI</th>
                <th>Nombre del paciente</th>
                <th>Edad</th>
                <th>Dirección</th>
                <th>Razón</th>
                <th>Receta</th>
                <th>Teléfono</th>
                <th>Otros</th>
            </tr>
        </thead>
        <tbody>
<?php
include("conex.php");
$consulta = "SELECT * FROM prueba2";
$resultado = mysqli_query($conex, $consulta);
$numero = mysqli_num_rows($resultado);
?>
<h5 class="card-title">Resultados (<?php echo $numero; ?>)</h5>

<?php
$num = 0; // Inicializa $num en 0

if ($conex) {
    
    if ($resultado) {
        
        while ($row = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $row["dpi"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["edad"] . "</td>";
            echo "<td>" . $row["direccion"] . "</td>";
            echo "<td>" . $row["razon"] . "</td>";
            echo "<td>" . $row["receta"] . "</td>";
            echo "<td>" . $row["telefono"] . "</td>";
            echo "<td>" . $row["otros"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo 'Error en la consulta: ' . mysqli_error($conex);
    }
} else {
    echo 'Error en la conexión a la base de datos';
}
?>
</tbody>
</table>
<div class="table__title"> <a href="edicion.php" class="redireccionar-link">Editar</a></div>
<a href="reg_pacientes.php" class="redireccionar-link">Volver</a>
</body>
</html>
