<?php 

    $nombres = ['David', 'Hector', 'Pepe', 'Adrian', 'Carmen'];

    echo count($nombres) . '<br>';

    echo implode(" ", $nombres) . '<br>';

    asort($nombres);

    print_r($nombres);

    echo '<br>';

    print_r(array_reverse($nombres));

    echo '<br>';

    echo array_search('Carmen', $nombres) . '<br>';

    $alumnos = [
        [
            'id' => 1,
            'nombre' => 'Martina',
            'edad' => 19,
        ],
        [
            'id' => 2,
            'nombre' => 'Raul',
            'edad' => 19,
        ],
        [
            'id' => 3,
            'nombre' => 'Ari',
            'edad' => 20,
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php foreach($alumnos as $alumno): ?>
            <tr>
                <?php foreach($alumno as $dato): ?>
                    <td>
                        <?=$dato?>
                    </td>
                <?php endforeach ?> 
            </tr>
        <?php endforeach ?> 
    </table>
</body>
</html>

<?php

    

?>