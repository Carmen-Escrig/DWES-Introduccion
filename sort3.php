<?php
    function sortByLength($a, $b) {
        if (strlen($a) == strlen($b)) {
            return 0;
        }
        return strlen($a) < strlen($b) ? -1 : 1;
    }

    $array = array('pescar' => 'acción de pescar peces', 'cazar' => 'acción de cazar animales', 'talar' => 'acción de talar arboles', 'minar' => 'acción de minar minerales');
    uasort($array, 'sortByLength');
    print_r($array);
?>