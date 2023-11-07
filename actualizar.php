<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Panel de edición</title>
    <style>
        .responsive-table {
            width: 80%; /* Ajusta el ancho de la tabla según tus preferencias */
            margin: 0 auto; /* Centra la tabla horizontalmente */
        }

        .responsive-table td {
            text-align: center; /* Centra el contenido de las celdas */
            padding: 5px; /* Añade espacio entre el contenido y el borde de la celda */
        }

        .table__item {
            width: 100%; /* Ajusta el ancho de los campos de entrada */
            box-sizing: border-box; /* Incluye el relleno en el ancho total */
            padding: 8px; /* Ajusta el espacio interno de la caja de entrada */
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .table__item-small {
            width: 50px; /* Ancho específico para celdas pequeñas, ajusta según sea necesario */
        }

        .table__item-medium {
            width: 100px; /* Ancho específico para celdas medianas, ajusta según sea necesario */
        }

        .table__item-hidden {
            display: none; /* Oculta la celda de id_paciente */
        }
    </style>
    <h1 class="title">Actualizar</h1>
</head>
<body>
    <form class="data-table data-table--edit" action="proc_act.php" method="post">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th class="table__item-hidden">id</th>
                    <th class="table__item-small">DPI</th>
                    <th class="table__item-medium">Nombre del paciente</th>
                    <th class="table__item-small">Edad</th>
                    <th class="table__item-medium">Dirección</th>
                    <th class="table__item-medium">Razón</th>
                    <th class="table__item-medium">Receta</th>
                    <th class="table__item-small">Teléfono</th>
                    <th class="table__item-medium">Otros</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conex.php");
                $id = $_GET["id"];
                $consulta = "SELECT * FROM prueba2 WHERE id_paciente = '$id'";
                $resultado = mysqli_query($conex, $consulta);

                if ($conex) {
                    if ($resultado) {
                        while ($row = mysqli_fetch_array($resultado)) {
                            echo "<tr>";
                            echo "<td class='table__item-hidden'><input type='hidden' name='id_paciente' value='" . $row['id_paciente'] . "'></td>";
                            echo "<td class='table__item-small'><input type='text' name='dpi' class='table__item' value='" . $row['dpi'] . "'></td>";
                            echo "<td class='table__item-medium'><input type='text' name='nombre' class='table__item' value='" . $row["nombre"] . "'></td>";
                            echo "<td class='table__item-small'><input type='text' name='edad' class='table__item' value='" . $row["edad"] . "'></td>";
                            echo "<td class='table__item-medium'><input type='text' name='direccion' class='table__item' value='" . $row["direccion"] . "'></td>";
                            echo "<td class='table__item-medium'><input type='text' name='razon' class='table__item' value='" . $row["razon"] . "'></td>";
                            echo "<td class='table__item-medium'><input type='text' name='receta' class='table__item' value='" . $row["receta"] . "'></td>";
                            echo "<td class='table__item-small'><input type='text' name='telefono' class='table__item' value='" . $row["telefono"] . "'></td>";
                            echo "<td class='table__item-medium'><input type='text' name='otros' class='table__item' value='" . $row["otros"] . "'></td>";
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
        <input type="submit" name="actualizar" value="Actualizar" class="container__submit container__submit--actualizar">
    </form>
    <a href="edicion.php" class="button">Volver</a>
    
</body>
</html>
