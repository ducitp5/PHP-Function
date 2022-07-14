<?php

$a = array(
3 => 11,
1 => 22,
2 => 33,
);

$a[0] = 44;
?>

<pre>
    <?php
        print_r($a);
    ?>
</pre>

<pre>
    <?php
        print_r( array_values( $a ));
    ?>
</pre>

