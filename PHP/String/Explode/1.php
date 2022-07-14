
<?php
	// Example 1
	$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";

	$pieces = explode(" " , $pizza);
	
	echo $pieces[0]; // piece1
	echo $pieces[1]; // piece2

	echo "<pre>";

	print_r($pizza);
	
	echo "</pre>";
	

	echo "<pre>";

	print_r(explode(" " , $pizza));
	
	echo "</pre>";


	// Example 2
	$data = "foo:*:1023:1000::/home/foo:/bin/sh";
	
	list($user, $pass, $uid, $gid, $gecos, $home, $shell) 	= explode(":" , $data);
	
	echo $user; // foo
	echo $pass; // *


	echo "<pre>";

	print_r(explode(":" , $data));
	
	echo "</pre>";
?>
