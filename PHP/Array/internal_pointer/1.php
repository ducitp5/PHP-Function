<?php

$array = array('step one', 'step two', 'step three', 'step four');

// by default, the pointer is on the first element
echo current($array) . "<br />\n"; // "step one"

// skip two steps
$a = next($array);
echo $a . " - a<br />\n"; // "step one"
next($array);
echo current($array) . "<br />\n"; // "step three"

// reset pointer, start again on step one
$c = reset($array);
echo $c . " - c<br />\n";
echo current($array) . "<br />\n";

$d = end($array);
echo $d . " - d<br />\n";
echo current($array) . "<br />\n";

$e = prev($array);
echo $e . " - e<br />\n";
echo current($array) . "<br />\n";

$f = array_key_first($array);
echo $f . " - f<br />\n";
echo current($array) . "<br />\n";
