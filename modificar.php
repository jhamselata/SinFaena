<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="m-3">
            <?php

            include_once 'conex.php';

            $id = $_GET['mdf'];

            $sql = "(SELECT * FROM empleados WHERE id= $id);";

            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                $row = mysqli_fetch_assoc($result);
                $name = $row['nombres'];
                $lastName = $row['apellidos'];
                $dni = $row['cedula'];
                $cell = $row['telefono'];
                $email = $row['correo'];
                $depto = $row['departamento'];
                $position = $row['puesto'];
                $status = $row['estado'];
            }

            ?>

            <h3 class="h3 mb-3">Actualizar datos del empleado</h3>

            <form action="update.php" class="form-horizontal" method="POST">

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label for="id_emp" class="form-label"><strong>ID: </strong></label>
                        <input id="id_emp" type="number" class="form-control" name="id" placeholder="ID..." value="<?php echo $id ?>" readonly />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label for="nombre_emp" class="form-label"><strong>Nombres: </strong></label>
                        <input id="nombre_emp" type="text" class="form-control" name="nombre" placeholder="Nombres..." value="<?php echo $name ?>" />
                    </div>

                    <div class="col-sm-3">
                        <label for="apellido_emp" class="form-label"><strong>Apellidos: </strong></label>
                        <input id="apellido_emp" type="text" class="form-control" name="apellido" value="<?php echo $lastName ?>" placeholder="Apellidos..." />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label for="cedula_emp" class="form-label"><strong>Cédula: </strong></label>
                        <input id="cedula_emp" type="text" class="form-control" name="cedula" value="<?php echo $dni ?>" placeholder="Cedula..." />
                    </div>

                    <div class="col-sm-3">
                        <label for="tel_emp" class="form-label"><strong>Teléfono: </strong></label>
                        <input id="tel_emp" type="text" class="form-control" name="telefono" value="<?php echo $cell ?>" placeholder="Telefono de contacto..." />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="correo_emp" class="form-label"><strong>Correo: </strong></label>
                        <input id="correo_emp" type="text" class="form-control" name="correo" value="<?php echo $email ?>" placeholder="Correo..." />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label for="depto_emp" class="form-label">
                            <strong>Departamento: </strong>
                        </label>
                        <input id="depto_emp" type="text" class="form-control" name="departamento" value="<?php echo $depto ?>" placeholder="Departamento..." />
                    </div>

                    <div class="col-sm-3">
                        <label for="puesto_emp" class="form-label">
                            <strong>Puesto: </strong>
                        </label>
                        <input id="puesto_emp" type="text" class="form-control" name="puesto" value="<?php echo $position ?>" placeholder="Puesto..." />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="estado_emp" class="form-label">
                            <strong>Estado: </strong>
                        </label>
                        <input id="estado_emp" type="text" class="form-control" name="estado" value="<?php echo $status ?>" placeholder="Estado..." />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <input class="btn btn-success" type="submit" value="Actualizar" name="update">
                    </div>
                    <div class="col-sm-2">
                        <a href="buscar.php"><input type="button" class="btn btn-primary" value="Volver"></a>
                    </div>
                </div>

            </form>

        </div>
    </div>
</body>

</html>