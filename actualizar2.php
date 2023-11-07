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
    <form class="data-table data-table--edit" action="proc_act2.php" method="post">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th class="table__item-hidden">id</th>
                    <th class="table__item-small">Doctor</th>
                    <th class="table__item-medium">Colegiado</th>
                    <th class="table__item-small">Especialidad</th>
                    <th class="table__item-medium">Diagnotico</th>
                    <th class="table__item-medium">Otros</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conex2.php");
                $id = $_GET["id"];
                $consulta = "SELECT * FROM prueba3 WHERE id_doctor = '$id'";
                $resultado = mysqli_query($conex2, $consulta);

                if ($conex2) {
                    if ($resultado) {
                        while ($row = mysqli_fetch_array($resultado)) {
                            echo "<tr>";
                            echo "<td class='table__item-hidden'><input type='hidden' name='id_doctor' value='" . $row['id_doctor'] . "'></td>";
                            echo "<td class='table__item-small'><input type='text' name='Doctor' class='table__item' value='" . $row['Doctor'] . "'></td>";
                            echo "<td class='table__item-medium'><input type='text' name='Colegiado' class='table__item' value='" . $row["Colegiado"] . "'></td>";
                            echo "<td class='table__item-small'><input type='text' name='Especialidad' class='table__item' value='" . $row["Especialidad"] . "'></td>";
                            echo "<td class='table__item-medium'><input type='text' name='Diagnostico' class='table__item' value='" . $row["Diagnostico"] . "'></td>";
                            echo "<td class='table__item-medium'><input type='text' name='otros' class='table__item' value='" . $row["Otros"] . "'></td>";
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
        <input type="submit" name="actualizar" value="Actualizar" class="container__submit container__submit--actualizar">
    </form>
    <a href="edicion2.php" class="button">Volver</a>
    
</body>
</html>
