<?php
    $nombre = $_GET['nombre'] ?? 'Carmen';


    echo trim($nombre, '/') . '<br>';
    
    echo strlen($nombre) . '<br>';

    echo strtoupper($nombre) . '<br>';

    echo strtolower($nombre) . '<br>';

    $prefijo = $_GET['prefijo'] ?? "";

    if ($prefijo != "") {
        if (strpos($nombre, $prefijo) === false) {
            echo 'No empieza por el prefijo' . '<br>';
        } else {
            echo strpos($nombre, $prefijo) != 0 ? 'No empieza por el prefijo' . '<br>' : 'Empieza por el prefijo' . '<br>';
        }
    }

    echo substr_count(strtolower($nombre), 'a') . '<br>';

    echo stripos(strtolower($nombre), 'a') === false ? 'No hay ninguna a ' . '<br>' : stripos(strtolower($nombre), 'a') . '<br>';

    echo str_ireplace(['o', 'O'], '0', $nombre) . '<br>';

    $url = 'http://username:password@hostname:9090/path?arg=value';

    echo parse_url($url, PHP_URL_SCHEME) . '<br>';

    echo parse_url($url, PHP_URL_USER) . '<br>';

    echo parse_url($url, PHP_URL_PATH) . '<br>';

    echo parse_url($url, PHP_URL_QUERY) . '<br>';

 
    

?>