
<?php
    $mode = $_GET["mode"] ?? $_COOKIE["mode"] ?? "dark";
    setcookie("mode", $mode, time() + 30 * 24 * 60 * 60);
    $_COOKIE["mode"] = $mode;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo Claro/Oscuro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="<?= $mode ?>">
    <p><a href="index.php?mode=dark">Modo Oscuro</a></p>
    <p><a href="index.php?mode=light">Modo Claro</a></p>
</body>

</html>
