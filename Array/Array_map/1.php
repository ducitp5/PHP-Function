
<?php

	function cube($n)
	{
		return ($n * $n * $n);
	}

	$a 		= [1, 2, 3, 4, 5];

	$b 		= array_map('cube'  ,  $a);

	echo "<pre>";

	print_r($b);
	
	echo "</pre>";	
	
?>
