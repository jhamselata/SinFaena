<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <h3 class="h3 mb-3 mt-3">Datos encontrados: </h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Contenido</th>
                    <th>Categoría</th>
                    <th>Fecha</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>

                <?php

                include_once ("conex.php");

                $categoria = $_POST['id'];

                if ($categoria != null) {
                    $query = "(SELECT * FROM noticias WHERE categoria='$categoria');";
                } else {
                    $query = "(SELECT * FROM noticias);";
                }


                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);

                if ($total != 0) {
                    while ($row = mysqli_fetch_assoc($data)) {
                        echo "<tr>"
                            . "<td>" . $row['id'] . "</td>"
                            . "<td>" . $row['titulo'] . "</td>"
                            . "<td>" . $row['texto'] . "</td>"
                            . "<td>" . $row['categoria'] . "</td>"
                            . "<td>" . $row['fecha'] . "</td>"
                            . "<td> <a class='link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover' href='borrar.php?dlt=$row[id]'>Eliminar</a> </td>"
                            . "</tr>";
                    }
                }

                ?>
            </tbody>
        </table>

        <div>
            <h3 class="h3 mb-3">Editar noticia</h3>
        </div>

        <form action="update.php" method="POST" class="form-horizontal">
            <div class="row mb-3">
                <div class="col-sm-4">
                    <label for="id" class="form-label">ID de la noticia: </label>
                    <input type="text" class="form-control" name="id" id="id" placeholder="ID..." />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-1">
                    <input type="submit" class="btn btn-success" name="update" value="Editar">
                </div>
                <div class="col-sm-1">
                    <a href="index.php"><input type="button" class="btn btn-primary" value="Volver"></a>
                </div>
            </div>
        </form>

    </div>
</body>

</html>