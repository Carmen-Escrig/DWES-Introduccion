<?php 

    require('Libro.php');
    require('Conexion.php');

    $titulo = $_GET['titulo'];
    $autor = $_GET['autor'];
    $paginas = $_GET['paginas'];
    $editorial = $_GET['editorial'];

    $registros = $pdo->prepare('INSERT INTO libros (titulo, autor, paginas, editorial) VALUES (?, ? , ?, ?)');
    $registros->bindParam(1, $titulo);
    $registros->bindParam(2, $autor);
    $registros->bindParam(3, $paginas);
    $registros->bindParam(4, $editorial);

    $registros->execute();
?>