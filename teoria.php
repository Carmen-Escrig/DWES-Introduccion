<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teoria</title>
</head>
<body>
<?php

/************************************

* Tipos y variables

*/

// Las variables comienzan con el símbolo $.

// Una variable válida comienza con una letra o guión bajo,

// seguida de cualquier cantidad de letras, números o guiones bajos.

// Las variables booleanas no distinguen entre mayúsculas o minúsculas

$boolean = true;  // o TRUE o True

$boolean = false; // o FALSE o False

// Enteros

$int1 = 12;   // => 12

$int2 = -12;  // => -12

$int3 = 012;  // => 10 (un 0 al comienzo declara un número octal)

$int4 = 0x0F; // => 15 (un 0x al comienzo declara un hexadecimal)

// Floats (también conocidos como doubles)

$float = 1.234;

$float = 1.2e3;

$float = 7E-10;

// Eliminar variable

unset($int1);

// Operaciones aritméticas

$suma        = 1 + 1; // 2

$diferencia  = 2 - 1; // 1

$producto    = 2 * 2; // 4

$cociente    = 2 / 1; // 2

// Operaciones aritméticas de escritura rápida

$numero = 0;

$numero += 1;      // Incrementa $numero en 1

echo $numero++;    // Imprime 1 (incremento después la evaluación)

echo ++$numero;    // Imprime 3 (incremento antes de la evaluación)

$numero /= $float; // Divide y asigna el cociente a $numero

// Las cadenas de caracteres deben declararse entre comillas simples

$sgl_quotes = '$String'; // => '$String'

// Evita utilizar comillas dobles excepto para embeber otras variables

$dbl_quotes = "This is a $sgl_quotes."; // => 'This is a $String.'

// Los caracteres especiales solo son válidos entre comillas dobles

$escaped   = "Esto contiene \t un caracter tabulador.";

echo $escaped;

$unescaped = 'Esto solo contiene una barra y una t: \t';

echo $unescaped;

// Rodea una variable entre corchetes si es necesario

$dinero = "Tengo $${numero} en el banco.";

echo $dinero;

// La concatenación de cadenas de caracteres se realiza con .

echo 'Esta cadena de caracteres ' . 'está concatenada';

// Las cadenas de caracteres pueden ser pasadas como parámetros en un echo

echo 'Multiples', 'Parametros', 'Validos';  // Devuelve 'MultiplesParametrosValidos'

/********************************

* Constantes

*/

// Una constante se define utilizando define()

// y nunca puede ser cambiada en tiempo de ejecución

// un nombre válido para una constante debe comenzar con una letra o guión bajo,

// seguido por cualquier número de letras, números o guiones bajos.

define("FOO",     "algo");

// el acceso a una constante se puede realizar llamando a la variable elegida sin un símbolo de $

echo FOO; // Devuelve 'algo'

echo 'Esto imprime ' . FOO;  // Devuelve 'Esto imprime algo'

?>
</body>
</html>