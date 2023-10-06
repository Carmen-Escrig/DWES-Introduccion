<?php

    /*class Conexion
    {
        private $pdo;
        private static $opciones = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true
    );

    public function Conexion() {
        $this->pdo = new PDO(
        'mysql:host=localhost;dbname=usuarios;charset=utf8',
        'root',
        'sa',
        $this->opciones);
     }
    }*/



    $opciones = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true
    );

    $pdo = new PDO(
        'mysql:host=localhost;dbname=Usuarios;charset=utf8',
        'root',
        'sa',
    $opciones);

?>
