<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulario</title>
</head>

<body>

    <div class="container">

        <h2 class="h2 mb-3">Formulario de Estudiantes</h2>

        <div>
            <form action="procesador.php" class="form-horizontal" method="POST">

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <label for="nombre" class="form-label">Nombre: </label>
                        <input id="nombre" type="text" class="form-control" name="nombre" id="nombre"
                            placeholder="Nombre">
                    </div>
                    <div class="col-sm-3">
                        <label for="telefono" class="form-label">Teléfono: </label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2">
                        <label for="edad" class="form-label">Edad: </label>
                        <input type="number" class="form-control" name="edad" id="edad" placeholder="Edad">
                    </div>
                    <div class="col-sm-5">
                        <label for="taller" class="form-label">Talleres: </label>
                        <select class="form-control" aria-label="Default select example" name="taller" id="taller">
                            <option selected>Seleccione su taller...</option>
                            <option value="GAT">GAT</option>
                            <option value="INF">INF</option>
                            <option value="CyP">CyP</option>
                            <option value="MUEBLES">MUEBLES</option>
                            <option value="ELCA">ELCA</option>
                            <option value="ELDAD">ELDAD</option>
                            <option value="MEC">MEC</option>
                            <option value="AUTO">AUTO</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3" id="sexos">
                    <label for="sexos" class="form-label">Género: </label>
                    <div class="col-sm-3">
                        <input class="form-check-input" type="radio" name="genero" id="genero" value="Masculino"
                            checked>
                        <label for="masculino" class="form-check-label">Masculino</label>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-check-input" type="radio" name="genero" id="femenino" value="Femenino">
                        <label for="femenino" class="form-check-label">Femenino</label>
                    </div>
                </div>

                <div class="row mb-3" id=asignatura>
                    <label for="asignatura" class="form-label">Asignaturas: </label>
                    <div class="col-sm-2">
                        <input class="form-check-input" type="checkbox" name="materias[]" id="español" value="Español"
                            checked>
                        <label class="form-check-label" for="español">
                            Español
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <input class="form-check-input" type="checkbox" name="materias[]" id="Matematicas"
                            value="Matemáticas">
                        <label class="form-check-label" for="matematicas">
                            Matemáticas
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <input class="form-check-input" type="checkbox" name="materias[]" id="sociales"
                            value="Sociales">
                        <label class="form-check-label" for="sociales">
                            Sociales
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <input class="form-check-input" type="checkbox" name="materias[]" id="fisica" value="naturales">
                        <label class="form-check-label" for="Física">
                            Fisica
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <input type="submit" class="btn btn-success" value="Enviar">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php

    ?>

</body>

</html>