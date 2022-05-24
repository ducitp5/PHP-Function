<?php
    $food = 'e';

    $return_value = match ($food) {
        'a' => 'aaa',
        'b' => 'bbb',

        'd', 'e', 'f' => 'def',

        default => '123',

    };

    print_r($return_value);
?>
