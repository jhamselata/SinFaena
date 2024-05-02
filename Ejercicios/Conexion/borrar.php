<?php

include_once('conex.php');

$id = $_GET['dlt'];

$query = "DELETE FROM noticias WHERE id = '$id'";
$data = mysqli_query($conn, $query);

header('location: index.php?insert=success');