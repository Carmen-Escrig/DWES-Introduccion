<?php

    require('Libro.php');
    require('Conexion.php');

    $id = $_GET['id'];
    $titulo = $_GET['titulo'];
    $autor = $_GET['autor'];
    $paginas = $_GET['paginas'];
    $editorial = $_GET['editorial'];

    $registros = $pdo->prepare('UPDATE libros set titulo = :titulo, autor = :autor, paginas = :pag, editorial = :editorial where id = :id');

    $param = [":id" => $id, ":titulo" => $titulo, ":autor" => $autor, ":pag" => $paginas, ":editorial" => $editorial];

    $registros->execute($param);

?>