
<?php
    $input_array = array('a', 'b', 'c', 'd', 'e');

    $a = 22;

    array_push($input_array , $a);

    echo '<pre>';

 //   var_dump( xdebug_info( 'mode' ) );

    print_r(array_chunk($input_array, 2));
    print_r(array_chunk($input_array, 2, true));

    echo '</pre>';
?>
