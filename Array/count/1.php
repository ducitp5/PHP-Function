<?php

    $food = array('fruits' => array('orange', 'banana', 'apple'),
        'veggie' => array('carrot', 'collard', 'pea'));

    $tt = ['a' => [1, 2, 3], 'b' => [5]];

    // recursive count
    echo (count($tt, COUNT_RECURSIVE)) .'<br>';

    // normal count
    print_r(count($tt));

?>
