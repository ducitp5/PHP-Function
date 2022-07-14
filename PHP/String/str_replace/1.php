<?php
// Provides: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");

echo $bodytag .'<br>';

$bodytag = str_replace("ab", "12", "abcd");

echo $bodytag .'<br>';

// Provides: Hll Wrld f PHP

$onlyconsonants = str_replace(["a", "b", "C", "D"], "", "abcdABCD");
echo $onlyconsonants .'<br>';

$onlyconsonants = str_replace(["a", "b"], ["C", "D"], "abcdABCD");
echo $onlyconsonants .'<br>';

// Provides: You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);

echo $newphrase .'<br>';

// Provides: 2
$str = str_replace("ll", "", "llgood golly miss molly!", $count);
echo $count;
?>
