<?php

require('Libro.php');
require('Conexion.php');

$id = $_GET['id'];

$registros = $pdo->prepare('DELETE FROM libros where id = :id');

$param = [":id" => $id];

$registros->execute($param);

?>