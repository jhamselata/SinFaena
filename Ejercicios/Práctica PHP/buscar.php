<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de los Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="content">
        <div class="m-3">
            <div class="container">
                <div class="mb-3">
                    <h3 class="h3 mb-3">Datos de los empleados</h3>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Cédula</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Departamento</th>
                                <th>Puesto</th>
                                <th>Estado</th>
                                <th colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            include_once("conex.php");

                            $search = isset($_POST['buscar']) ? trim($_POST['buscar']) : null;

                            if ($search != null) {
                                $query = "(SELECT * FROM empleados WHERE departamento = '$search' or puesto = '$search');";
                            } else {
                                $query = "(SELECT * FROM empleados);";
                            }

                            $data = mysqli_query($conn, $query);
                            $total = mysqli_num_rows($data);

                            if ($total != 0) {
                                while ($row = mysqli_fetch_assoc($data)) {
                                    echo "<tr>"
                                        . "<td>" . $row['id'] . "</td>"
                                        . "<td>" . $row['nombres'] . "</td>"
                                        . "<td>" . $row['apellidos'] . "</td>"
                                        . "<td>" . $row['cedula'] . "</td>"
                                        . "<td>" . $row['telefono'] . "</td>"
                                        . "<td>" . $row['correo'] . "</td>"
                                        . "<td>" . $row['departamento'] . "</td>"
                                        . "<td>" . $row['puesto'] . "</td>"
                                        . "<td>" . $row['estado'] . "</td>"
                                        . "<td> <a href='delete.php?dlt=$row[id]'> <input type='button' id='eliminar' 
                                                 class='btn btn-danger' onclick='return confirmar(this.id)' value='Eliminar'></a>
                                        </td>"
                                        . "<td> <a href='modificar.php?mdf=$row[id]'><input type='button' id='modify' 
                                                 class='btn btn-warning' value='Editar'> </a> 
                                        </td>"
                                        . "</tr>";
                                }
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="container">
                <a href="index.php"><input type="button" class="btn btn-primary" value="Volver"></a>
            </div>

        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>