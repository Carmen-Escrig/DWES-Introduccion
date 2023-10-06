<?php

    require('User.php');
    require('Conexion.php');

    class UserRepository
    {
        private $sql;

        function UserRepository() {
            //$this->sql = new Conexion();
        }

        function insertUser($username, $email, $password) {
            if (!$this->sql) {
                echo 'No hay conexion';
            }
            $registros = $this->sql->prepare('INSERT INTO users (username, email, password) VALUES (?, ? , ?)');
            $registros->bindParam(1, $username);
            $registros->bindParam(2, $email);
            $registros->bindParam(3, $password);
        
            $registros->execute();
        }

        function findByUserNamePassword($username, $password) {
            $pdoSt = $this->sql->prepare('SELECT id, $username, email, password from users where username = ? and password = ?');
            $pdoSt->bindParam(1, $username);
            $pdoSt->bindParam(2, $password);

            $pdoSt->execute();

            $user = $pdoSt->fetchAll(PDO::FETCH_CLASS, 'User')[0];
            
            return $user;
        }
    }
