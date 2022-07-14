<?php

    function printar($ar){

        echo '<pre>';

        print_r($ar);
    
        echo '</pre>';
    };

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $chunks = array_chunk($array, 3 ,true);
    // $chunks = [[1, 2, 3], [4, 5, 6], [7, 8, 9]]

    $de_chunked = array_reduce($chunks, function ($carry, $item) {
        return array_merge($carry, $item);
    }, []);
    // $de_chunked = [1, 2, 3, 4, 5, 6, 7, 8, 9]

    echo '<pre>';

    print_r($array);
    print_r($chunks);
    print_r($de_chunked);   

    echo '</pre>';

    unset($array[3]);

    printar($array);

    $array[3]   =   33;

    printar($array);
?>