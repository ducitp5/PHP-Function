
<?php
    $input_array = array('a', 'b', 'c', 'd', 'e');

    echo '<pre>';

    print_r(array_chunk($input_array, 2));
    print_r(array_chunk($input_array, 2, true));

    echo '</pre>';
?>
