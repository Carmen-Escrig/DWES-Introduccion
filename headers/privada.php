<?php

    $entra = $_GET['dejameEntrar'] ?? 0;
    if ($entra == 0) {
        header('Location: login.php');
        exit();
    } else {
        echo 'Bienvenido';
    }

?>