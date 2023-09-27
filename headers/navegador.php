<?php

    $navegador = $_SERVER['HTTP_USER_AGENT'];


    if (strpos($navegador, "Firefox") === false) {
        echo '<script>alert("No estás en Firefox")</script>';
    } else {
        echo "<h3>Lorem Ipsum</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi assumenda voluptatum tempora sit tempore, facere unde commodi accusantium in quibusdam aliquid quasi itaque ratione at soluta ea officia iusto deleniti!</p>";

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Navegador</title>
</head>

<body>
    
</body>

</html>