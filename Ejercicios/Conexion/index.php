<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <div class="container">

    <div class="mb-3 mt-3">
      <h2 class="h2 mb-3">Creacion de Noticias</h2>
    </div>

    <form class="form-horizontal" action="insertar.php" method="POST">

      <div class="row mb-3">
        <div class="col-sm-4">
          <label for="titulo" class="form-label">Titulo: </label>
          <input id="titulo" type="text" class="form-control" name="titulo" placeholder="Titulo" />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-4">
          <label for="texto" class="form-label">Texto: </label>
          <textarea class="form-control" name="texto" id="texto" placeholder="Texto de la Noticia"></textarea>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-4">
          <label for="categoria" class="form-label">Categoria: </label>
          <select class="form-control" aria-label="Default select example" name="categoria" id="categoria">
            <option selected>Categoria de la Noticia...</option>
            <option value="Actualidad">Actualidad</option>
            <option value="Politica">Politica</option>
            <option value="Social">Social</option>
            <option value="Internacionles">Internacionales</option>
          </select>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-3">
          <input type="submit" class="btn btn-success" value="Enviar" />
        </div>
      </div>
    </form>

    <div class="mb-3">
      <h2 class="h2 mb-3 mt-3">Consulta los datos de las noticias</h2>
    </div>

    <form action="consulta.php" class="form-horizontal" method="POST">
      <div class="row mb-3">
        <div class="col-sm-4">
          <label for="id" class="form-label">Categoria de la Noticia: </label>
          <input id="id" type="text" class="form-control" name="id" id="id" placeholder="Categoria" />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-1">
          <input type="submit" class="btn btn-success" value="Buscar" />
        </div>
        <div class="col-sm-1">
          <input type="submit" class="btn btn-secondary" value="Ver todos...">
        </div>
    </form>
  </div>
</body>

</html>