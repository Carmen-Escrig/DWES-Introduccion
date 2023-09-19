<?php

    $personas = [
        'alumno' => [
            'Nombre' => 'Hector',
            'Apellido' => 'Fogues'
        ],
        'profesor' => [
            'Nombre' => 'David',
            'Apellido' => 'Mayol'
        ],
    ];

    $prueba = [
        'nombre' => 'Sara',
        'apellido' => 'Garcia',
        'hola'
    ];

    print_r($prueba);

    $prueba[] = 'adios';


    print_r($prueba);

    $prueba['edad'] = '20';


    print_r($prueba);
?>
<hr>
<?php
    foreach($personas as $tipo => $datos):?>
    <?=$datos['Nombre']?> es un <?=$tipo?> <br>
    <?php endforeach ?>
