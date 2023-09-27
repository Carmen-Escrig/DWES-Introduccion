<?php

$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

echo $language;

if ($language == "en") {
    $content = "Hello, my name is Carmen";
} else if ($language == "ca") {
    $content = "Hola, em dic Carmen";
} else {
    $content = "Hola, me llamo Carmen";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Idioma</title>
</head>

<body>
    <p><?= $content ?></p>
</body>

</html>

