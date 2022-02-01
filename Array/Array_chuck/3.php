<?php

    function printar($ar){

        echo '<pre>';

        print_r($ar);
    
        echo '</pre>';
    };

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];  
    printar($array);

    printar(array_keys($array));

    printar(array_values($array));

    $array = array_keys($array);
    $array[4] = 33;
    printar($array);

?>