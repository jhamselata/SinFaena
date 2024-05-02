<?php

// Variables que contienen los datos para la conexión a la BD
$servidor = "localhost";
$usuario = "root";
$contra = "130206";
$bdnombre = "practica_php";

// Creación de la conexión
$conn = new mysqli($servidor, $usuario, $contra, $bdnombre);

// Verificar la conexión
if($conn->connect_error) {
die("La conexión a la base de datos fallo: " . $conn->connect_error);
}

// Retornar el objeto de la conexión
return $conn;
