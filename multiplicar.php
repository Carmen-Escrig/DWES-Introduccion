<?php
    $primerValor = 1;

    $primerValor = isset($_GET['x']) ? $_GET['x'] : 1;
    
    $segundoValor = $_GET['y'] ?? 1;
    
    echo "El resultado es " . $primerValor * $segundoValor;
?>