<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Panel de edición</title>
</head>
<a href="doc_reg.php" class="button">Volver</a>
    <script src="confirmar2.js"></script>
<body>
    <h1 class="title">Editar Doctor</h1>
    <table class="data-table data-table--edit">
        <thead>
            <tr>
                <th>Doctor</th>
                <th>Colegiado</th>
                <th>Especialidad</th>
                <th>Diagnóstico</th>
                <th>Otros</th>
                <th>Operación</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("conex2.php");
            $consulta = "SELECT * FROM prueba3";
            $resultado = mysqli_query($conex2, $consulta);
            if ($conex2) {
                
                if ($resultado) {
                    
                    while ($row = mysqli_fetch_array($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $row["Doctor"] . "</td>";
                        echo "<td>" . $row["Colegiado"] . "</td>";
                        echo "<td>" . $row["Especialidad"] . "</td>";
                        echo "<td>" . $row["Diagnostico"] . "</td>";
                        echo "<td>" . $row["Otros"] . "</td>";
                        echo "<td>";
                        echo '<a href="actualizar2.php?id=' . $row["id_doctor"] . '" class="table__item__link">Editar</a>';
                        echo ' | ';
                        echo '<a href="procesar_eliminar2.php?id=' . $row["id_doctor"] . '" class="table__item__link">Eliminar</a>';
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo 'Error en la consulta: ' . mysqli_error($conex2);
                }
            } else {
                echo 'Error en la conexión a la base de datos';
            }
            ?>
        </tbody>
    </table>
    <a href="doc_reg.php" class="button">Volver</a>
    <script src="confirmar2.js"></script>
</body>
</html>
