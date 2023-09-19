<?php 
    $edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

    ksort($edades);
    echo 'Ordenado por Nombre, ascendente: ';
    print_r($edades);
    echo '<br>';

    asort($edades);
    echo 'Ordenado por Edad, ascendente: ';
    print_r($edades);
    echo '<br>';

    krsort($edades);
    echo 'Ordenado por Nombre, descendente: ';
    print_r($edades);
    echo '<br>';

    arsort($edades);
    echo 'Ordenado por Edad, descendente: ';
    print_r($edades);
    echo '<br>';
?>