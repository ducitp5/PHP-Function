
<?php

	

	

	$a = [11, 12, 13, 14, 15];
	
	$b = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];


	echo "<pre>";

	print_r(
		array_map(
			function (int $n, string $m): string	
			{
				return "The number {$n} is called {$m} in Spanish";
			}, 
			$a, 
			$b
		)
	);
	
	echo "</pre>";

	function map_Spanish(int $n, string $m): array
	{
		return [$n => $m];
	}
	
	echo "<pre>";

	print_r(array_map('map_Spanish', $a , $b));
	
	echo "</pre>";
?>
