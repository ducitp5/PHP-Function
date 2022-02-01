
<?php

	$arr = ['stringkey' => 'value'];
	
	function cb1($a) {

		return [$a];
	}

	
	
	echo "<pre>";

	print_r(array_map(function ($a) {

		return [$a];
	}, $arr));
	
	echo "</pre>";


	function cb2($a, $b) {
		
		return [$a, $b];
	}

	
	echo "<pre>";

	print_r(array_map('cb2', $arr, $arr));
	
	echo "</pre>";


	echo "<pre>";

	print_r(array_map(null,  $arr));
	
	echo "</pre>";


	echo "<pre>";

	print_r(array_map(null, $arr, $arr));
	
	echo "</pre>";

?>
