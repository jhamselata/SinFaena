<?php

include_once("conex.php");

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$categoria = $_POST['categoria'];

$query = "INSERT INTO noticias VALUES(0,'$titulo','$texto','$categoria', CURDATE());";

mysqli_query($conn, $query);

//echo $query;

header("location:index.php?insert=success");