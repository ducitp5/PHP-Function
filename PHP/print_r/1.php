<pre>

<?php
    $a = array(
        
        'a' => 'apple',
        'b' => 'banana',
        
        'c' => array(
            'x',
            'y',
            'z'
        )
    );

    print_r($a);
?>

</pre>


<?php
$b = array(
    'm' => 'monkey',
    'foo' => 'bar',
    'x' => array(
        'x',
        'y',
        'z'
    )
);
$results = print_r($b, true); // $results now contains output from print_r
?>