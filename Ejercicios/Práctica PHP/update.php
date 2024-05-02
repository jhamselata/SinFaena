<?php

include_once('conex.php');

if (isset($_POST['update'])) {

    $code = trim($_POST['id']);
    $name = trim(($_POST['nombre']));
    $lastName = trim(($_POST['apellido']));
    $dni = trim(($_POST['cedula']));
    $cell = trim(($_POST['telefono']));
    $email = trim(($_POST['correo']));
    $depto = trim(($_POST['departamento']));
    $position = trim(($_POST['puesto']));
    $status = trim(($_POST['estado']));

    $query = "UPDATE empleados SET nombres = '$name', apellidos = '$lastName', cedula = '$dni',
    telefono = '$cell', correo = '$email', departamento = '$depto', puesto = '$position',
    estado = '$status' WHERE id = '$code';";

    $result = mysqli_query($conn, $query);
}
if ($result) {
    header("location:./buscar.php");
} else {
    echo "Hubo un problema a la hora de actualizar los datos: " . mysqli_error($conn);
}
