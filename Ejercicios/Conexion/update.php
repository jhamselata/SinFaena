<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <h3 class="h3 mt-3 mb-3">Actualiza tu noticia</h3>

        <?php
        include_once ("conex.php");

        $id = $_POST['id'];

        $sql = "SELECT * FROM noticias WHERE id= $id;";

        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            $row = mysqli_fetch_assoc($result);
            $titulo = $row['titulo'];
            $texto = $row['texto'];
            $categoria = $row['categoria'];
        }
        ?>

        <form action="update.php" class="form-horizontal" method="POSt">
            <div class="row mb-3">
                <div class="col-sm-3">
                    <label for="id" class="form-label">ID:</label>
                    <input class="form-control" type="text" name="id" id="id" placeholder="ID" value="<?php echo $id ?>"
                        readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <label for="titulo" class="form-label">Título: </label>
                    <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Título"
                        value="<?php echo $titulo ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <label for="texto" class="form-label">Contenido: </label>
                    <textarea class="form-control" name="texto" id="texto"
                        placeholder="Texto de la Noticia"><?php echo $texto ?></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <label for="categoria" class="form-label">Categoría: </label>
                    <input class="form-control" type="text" name="categoria" id="categoria" placeholder="Categoría"
                        value="<?php echo $categoria ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <input type="submit" class="btn btn-success" name="update" value="Actualizar">
                </div>
                <div class="col-sm-2">
                    <a href="consulta.php"><input type="button" class="btn btn-primary" value="Volver"></a>
                </div>
            </div>
        </form>

        <?php

        include_once ('conex.php');
        $id = $_POST['id'];

        if (isset($_POST['update'])) {
            $query = "UPDATE noticias SET titulo='$_POST[titulo]', texto='$_POST[texto]', categoria='$_POST[categoria]' WHERE id='$_POST[id]'";
            mysqli_query($conn, $query);
        }

        header("location: consulta.php?insert=success");
        ?>

    </div>
</body>

</html>

<?php

