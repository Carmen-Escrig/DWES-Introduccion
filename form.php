<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
        <p>
            <label>Nombre: </label>
            <input type="text" name="nombre" maxlength="50">
        </p>
        <p>
            <label>Correo: </label>
            <input type="text" name="correo">
        </p>
        <p>
            <label>Estudios: </label>
            <select name="estudios">
                <option value="sin-estudios">Sin estudios</option>
                <option value="educacion-obligatoria">Educación Obligatoria (ESO)</option>
                <option value="formacion-profesional">Formación Profesional (FP)</option>
                <option value="universidad">Universidad</option>
            </select>
        </p>
        <p>
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
        </p>
        <p>
            <label>Avatar: </label>
            <input type="file" name="avatar" />
        </p>
        <p>
            <input type="submit" name="submit" />
        </p>
    </form>
</body>

</html>

<?php

function filter($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

$max_file_size = "51200";
$valid_extensions = ["jpg", "png", "gif"];
$errors = array();
$directorioSubida = "uploads/";

if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre"])) {
        $errors[] = "Introduce un nombre";
    }

    if (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL) || empty($_POST["correo"])) {
        $errors[] = "Introduce un email con el formato correcto";
    }

    if (empty($errors)) {
        $name = filter($_POST["nombre"]);
        $mail = filter($_POST["correo"]);
        $studies = filter($_POST["estudios"]);

        $imgName = $_FILES['avatar']['name'];
        $imgsize = $_FILES['avatar']['size'];
        $tempDirectory = $_FILES['avatar']['tmp_name'];
        $imgType = $_FILES['avatar']['type'];
        $arrayImg = pathinfo($imgName);


        $extension = $arrayImg['extension'];
    }


    if (!in_array($extension, $valid_extensions)) {
        $errors[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";
    }

    if ($imgsize > $max_file_size) {
        $errores[] = "La imagen debe de tener un tamaño inferior a 50 kb";
    }

    $imgName = $arrayImg['filename'];
    $imgName = preg_replace("/[^A-Z0-9._-]/i", "_", $imgName);
    $imgName = $imgName . rand(1, 100);

    if (empty($errors)) {

        $fullName = $directorioSubida . $imgName . "." . $extension;

        move_uploaded_file($tempDirectory, $fullName);

        print "El archivo se ha subido correctamente";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php if (isset($errors)) {
            foreach ($errors as $error) {
                echo "<li> $error </li>";
            }
        }
        ?>
    </ul>

    <?php if (isset($_POST["submit"]) && empty($errors)) : ?>

        <h2>Datos enviados</h2>

        Nombre : <?= $name ?? "" ?> <br>
        Email : <?= $mail ?? "" ?> <br>
        Educación : <?= $studies ?? "" ?> <br>

        <img src="<?= $fullName?>" />

    <?php endif; ?>
</body>

</html>