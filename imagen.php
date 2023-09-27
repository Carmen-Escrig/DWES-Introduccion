<?php

    $acces = $_GET['letMeIn'] ?? 0;
    $img = $_GET['img'] ?? '';

    if ($acces == 1 && is_file('/home/alumno/Imágenes/' . $img)) {
        header('Content-Type: image/png');
        imagepng(imagecreatefrompng('/home/alumno/Imágenes/' . $img));
    } else {
        if ($acces == 0) {
            http_response_code(401);
        } else {
            http_response_code(404);
        }
        header('Content-Type: image/png');
        imagepng(imagecreatefrompng('/home/alumno/Imágenes/prohibido.png'));
    }
    

?>