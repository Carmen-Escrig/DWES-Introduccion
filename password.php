<?php

function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2) {
    $password = [];

    while ($upper != 0) {
        $password[] = chr(rand(65, 90));
        $upper --;
    }

    while ($lower != 0) {
        $password[] = chr(rand(97, 122));
        $lower --;
    }

    while ($numeric != 0) {
        $password[] = chr(rand(48, 57));
        $numeric --;
    }

    while ($other != 0) {
        $password[] = chr(rand(33, 47));
        $other --;
    }

    shuffle($password);

    return implode('', $password);
}

$pass = rand_Pass();

echo $pass;

?>