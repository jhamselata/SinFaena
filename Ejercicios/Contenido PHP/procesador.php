<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Procesador</title>
</head>

<body>

    <div class="container">
        <h4>Datos del estudiante:</h4>

            <?php

            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $edad = $_POST['edad'];
            $taller = $_POST['taller'];
            $genero = $_POST['genero'];
            $materias = $_POST['materias'];            

            print ("<br> <b>Nombre completo:</b> $nombre <br>");
            print ("<b>Teléfono:</b> $telefono <br>");
            print ("<b>Edad:</b> $edad <br>");
            print ("<b>Taller:</b> $taller <br>");
            print ("<b>Género:</b> $genero <br>");
            print ("<b>Asignaturas seleccionadas:</b> <br>");
            foreach($materias as $materia){
                print ("- $materia <br> ");
            }
            print ("<br>");
            ?>

            <p><b>Nota:</b> "Esta informacion ha sido obtenido por el formulario que ha
                sido llenado previamente".
            </p>
    </div>

</body>

</html>