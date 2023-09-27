<?php
    $id = $_GET['id'] ?? "0";
    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

    if (array_key_exists($id, $productos)) {
        echo $productos[$id];
    } else {
        http_response_code(404);
        echo "<h2>No existe ese producto</h2>";
    }
?>