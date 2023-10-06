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
            $errors[] = "Introduce un nombre";
        }
    
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])) 
        {
            $errors[] = "Introduce un email con el formato correcto";
        }

        if (empty($_POST['password'])) 
        {
            $errors[] = "Introduce una contraseña";
        }

        if ($_POST['password'] != $_POST['password2']) 
        {
            $errors[] = "Las contraseñas no coinciden";
        }

    
        if (empty($errors)) {

            $name = ($_POST["name"]);
            $email = filter($_POST["email"]);
            $password = ($_POST["password"]);

            $registros = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ? , ?)');
            $registros->bindParam(1, $name);
            $registros->bindParam(2, $email);
            $registros->bindParam(3, $password);
        
            $registros->execute();

            $_SESSION['username'] = $name;
            $_SESSION['success'] = 'Ahora estás loggeado';
            unset($_SESSION['msg']);

            if (isset($_GET["returnToUrl"])) {
                header('location: '. $_GET["returnToUrl"]);
            } else {
                header('location: pagina_privada.php');
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
    <title>Registro</title>
</head>

<body>
<form action="<?php 

    if (isset($_GET["returnToUrl"])) {
        echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?returnToUrl=" . $_GET["returnToUrl"];
    } else {
        echo htmlspecialchars($_SERVER["PHP_SELF"]); 
    }
    
    ?>" method="POST" enctype="multipart/form-data">
        <p>
            <label>Nombre de usuari@: </label>
            <input type="text" name="name" maxlength="50">
        </p>
        <p>
            <label>Correo Electrónico: </label>
            <input type="email" name="email">
        </p>
        <p>
            <label>Contraseña: </label>
            <input type="password" name="password">
        </p>
        <p>
            <label>Confirma la contraseña: </label>
            <input type="password" name="password2">
        </p>
        <p>
            <input type="submit" name="submit" value="REGISTRARSE" />
        </p>
    </form>
    <p>¿Ya eres miembro? <a href="login.php">Acceso usuari@s</a></p>
</body>

</html>