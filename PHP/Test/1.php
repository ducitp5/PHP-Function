<?php

$a = 1;

$b =&$a;

$a = 3;
$b = 4;

echo $a ;
echo $b;
