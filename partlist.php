<?php

    $array = ["Seguro", "que", "apruebo", "esta", "asignatura"];

    function partlist($array) 
    {
        $solucion = [];

        for($i = 1; $i < count($array); $i++) {
            $parte = array_slice($array, 0, $i);
            $parte2 = array_slice($array, $i, count($array));
            $solucion[] = [implode(" ", $parte), implode(" ", $parte2)];
        }

        print_r($solucion);
    }

    partlist($array);

?>