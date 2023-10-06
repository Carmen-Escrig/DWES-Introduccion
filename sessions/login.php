<?php

    session_start();

    if (isset($_SESSION['username'])) {
        header('location: pagina_privada.php');
    }

    require('User.php');
    require('Conexion.php');

    function filter($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $errors = array();

    if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (empty($_POST["name"])) 
        {
            $errors[] = "Introduce un nombre de usuario";
        }

        if (empty($_POST['password'])) 
        {
            $errors[] = "Introduce una contraseña";
        }

        if (empty($errors)) {
            $name = ($_POST["name"]);
            $password = ($_POST["password"]);

            $pdoSt = $pdo->prepare('SELECT id, username, email, password from users where username = ? and password = ?');
            $pdoSt->bindParam(1, $name);
            $pdoSt->bindParam(2, $password);

            $pdoSt->execute();

            $user = $pdoSt->fetchAll(PDO::FETCH_CLASS, 'User')[0];            

            if ($user != null) {

                $_SESSION['username'] = $user->getUsername();
                $_SESSION['success'] = 'Ahora estás loggeado';
                unset($_SESSION['msg']);

                if (isset($_GET["returnToUrl"])) {
                    header('location: '. $_GET["returnToUrl"]);
                } else {
                    header('location: pagina_privada.php');                
                }
            } else {
                echo 'Los datos de inicio de sesión son incorrectos.';
            }
        } else {
            echo 'Ha habido algun error' . '<br>';
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
        }
    
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
<form action="<?php 

    if (isset($_GET["returnToUrl"])) {
        echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?returnToUrl=" . $_GET["returnToUrl"];
    } else {
        echo htmlspecialchars($_SERVER["PHP_SELF"]); 
    }
    
    ?>" method="POST" enctype="multipart/form-data">        <p>
            <label>Nombre de usuari@: </label>
            <input type="text" name="name" maxlength="50">
        </p>
        <p>
            <label>Contraseña: </label>
            <input type="password" name="password">
        </p>
        <p>
            <input type="submit" name="submit" value="ACCEDER" />
        </p>
    </form>
    <p>¿Todavía no eres miembro? <a href="register.php">Registrarse</a></p>
</body>

</html>