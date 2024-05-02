<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios con PHP</title>
</head>

<body>
    <!-- Comienzo del codigo PHP -->
    <?php
    /*
    print ("<p>Hola Mundo</p>");
    
    //Uso del comando 'ECHO'
    echo "Buenos dias", "espero que todos ustedes ", "se encuentren bien";
    echo "<p></p>";

    //Prueba de los operadores
    $a = 8;
    $b = 3;
    $c = 3;

    //Expresion
    echo !($b <= $c),  "<br>";

    //Comandos 'Include' y 'Require'

    //Ejercicio Tablas de Multiplicar
    echo "<div>";
    echo "<h2>Tablas de Multiplicar</h2>", "<br>";

    $x = 1;

    while ($x <= 12) {
        echo "<h3>Tabla del $x</h3>";
        for($y = 1; $y <= 12; $y++) {
            $z = $x * $y;
            echo "<p>$x x $y =  $z</p>";
        }
        $x++;
        $y = 1;
    }

    echo "</div>";

    //Ejemplo de 'Funciones' envio de parametros por <<referencia>> y por <<valor>>
    function suma(&$a, $b){
        $a = $a + $b;
        return $a;
    }

    $a = 5;
    $b = 2;
    $c = suma($a, $b);

    echo "$c<br>";
    echo $a;

    //Ejercicio con 'Funciones'
    
    function sp($valor)
    {

        $a = 0;

        for ($i = 1; $i <= $valor; $i++) {
            $a = $i + $a;
        }

        echo $a;
    }

    $x = 5;
    sp($x);

//Ejercicio: Calcula tu edad, en base a fecha de nacimiento y la actual


function calcular_edad($fecha_nac, $fecha_act){

$dias = $fecha_nac -> diff($fecha_act);

$var =  $dias -> format('%R%a');


echo round($var / 365, 0) . " años de edad.";

}

$fecha_nac = date_create('2006/02/13');
$fecha_act = date_create('2024/04/11');

calcular_edad($fecha_nac, $fecha_act);
*/
    ?>
</body>

</html>