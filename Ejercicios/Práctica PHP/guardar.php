<?php

include_once 'conex.php';

//Recibir la informacion del formulario

$name = trim(($_POST['nombre']));
$lastName = trim(($_POST['apellido']));
$dni = trim(($_POST['cedula']));
$cell = trim(($_POST['telefono']));
$email = trim(($_POST['correo']));
$depto = trim(($_POST['departamento']));
$position = trim(($_POST['puesto']));
$status = trim(($_POST['estado']));

$query = "INSERT INTO empleados VALUES(0,'$name','$lastName','$dni', '$cell', '$email', '$depto', '$position', '$status');";

//echo $query;

$result = mysqli_query($conn, $query);

if ($result) {
    header("location:index.php?insert=success");
} else {
    echo "Hubo un problema a la hora de guardar los datos: " . mysqli_error($conn);
}
