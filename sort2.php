<?php
    $temperaturas = '30 27 26 25 21 18 32 33 18 19 21 24 27 29 34 31 32 11 24 20 21 22 26 24 27 29 31 28 23 24';

    $temp = explode(" ", $temperaturas);

    echo 'Media: ' . array_sum($temp) / count($temp);
    echo '<br>';

    sort($temp);

    echo '5 temperaturas mínimas: ';

    for ($i = 0; $i < 5; $i++) {
        echo $temp[$i] . ' ';
    }
    
    echo '<br>';

    $temp_rev = array_reverse($temp);

    echo '5 temperaturas máximas: ';

    for ($i = 0; $i < 5; $i++) {
        echo $temp_rev[$i] . ' ';
    }

    echo '<br>';
?>