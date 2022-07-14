
<?php

	$a = [1, 2, 3, 4, 5];
	$b = ['one', 'two', 'three', 'four', 'five'];
	$c = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

	$d = array_map(null, $a, $b, $c);

	echo "<pre>";

	print_r($d);

	echo "</pre>";


	$array = [1, 2, 3];

	var_dump(array_map(null, $array));

?>
