
<?php

	$arr = [
		'v1' => 'First release',
		'v2' => 'Second release',
		'v3' => 'Third release',
	];

	// Note: Before 7.4.0, use the longer syntax for anonymous functions instead.

	$callback 	= fn(string $k, string $v): string => "$k was the $v";

	$result 	= array_map($callback, array_keys($arr), array_values($arr));

	var_dump($result);
?>
