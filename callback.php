<?php
    $array = ['mapa', 'ordenador', 'ratón', 'teclado'];
    $longitudes = array_map('strlen', $array);

    echo 'Longitud máxima: ' . max($longitudes) . '<br>';
    echo 'Longitud mínima: ' . min($longitudes) . '<br>';
?>