
<?php

	$func = function(int $value){

		return $value * 2;
	};


	echo "<pre>";

	print_r(range(1, 5));
	
	echo "</pre>";


	echo "<pre>";

	print_r(array_map($func, range(1, 5)));
	
	echo "</pre>";	


	echo "<pre>";

	print_r(array_map($func, range(6, 10)));
	
	echo "</pre>";	


	echo "<pre>";
	
	print_r(
		
		array_map(
			
			fn($value) : int => $value * 2 , range(1, 5)			
		)
		
	);
	
	echo "</pre>";	

?>
