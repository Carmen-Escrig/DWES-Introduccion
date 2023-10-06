<?php
    session_start();
    if (!isset($_SESSION['username'])) {

        $_SESSION['msg'] = "Para acceder a esta página, debes iniciar sesión primero";

        header('location: login.php?returnToUrl=pagina_privada.php');

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina privada</title>
</head>
<body>
    <h2>Bienvenido <?= $_SESSION['username'] ?></h2>

    <p><a href="logout.php">LogOut</p>
</body>
</html>

