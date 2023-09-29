<?php

    require('Libro.php');
    require('Conexion.php');

    $id = $_GET['id'];

    $pdoSt = $pdo->prepare('SELECT id, titulo, autor, paginas, editorial from libros where id = ?');
    $pdoSt->bindParam(1, $id);

    $pdoSt->execute();

    $libros = $pdoSt->fetchAll(PDO::FETCH_CLASS, 'Libro');

    foreach ($libros as $libro) {
        $libro->toString();
    }

?>