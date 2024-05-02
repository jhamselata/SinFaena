<?php

include_once('conex.php');

$id = $_GET['dlt'];

$query = "DELETE FROM empleados WHERE id = '$id'";
$data = mysqli_query($conn, $query);

header('location: buscar.php?insert=success');
