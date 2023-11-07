<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Panel de edición</title>
</head>
<a href="pac_reg.php" class="button">Volver</a>
    <script src="confirmar.js"></script>
<body>
    <h1 class="title">Editar Paciente</h1>
    <table class="data-table data-table--edit">
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
                <th>Operación</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("conex.php");
            $consulta = "SELECT * FROM prueba2";
            $resultado = mysqli_query($conex, $consulta);
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
                        echo "<td>";
                        echo '<a href="actualizar.php?id=' . $row["id_paciente"] . '" class="table__item__link">Editar</a>';
                        echo ' | ';
                        echo '<a href="procesar_eliminar.php?id=' . $row["id_paciente"] . '" class="table__item__link">Eliminar</a>';
                        echo "</td>";
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
    <a href="pac_reg.php" class="button">Volver</a>
    <script src="confirmar.js"></script>
</body>
</html>