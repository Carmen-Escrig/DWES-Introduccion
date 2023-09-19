<?php 
    $color = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html')
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
                <?php foreach($color as $name => $link): ?>
                    <li><a href='<?=$link?>'><?=$name?></a></li>
                <?php endforeach ?> 
            </ul>
        </body>
</html>