<?php 

$so1 = 1;
$so2 = &$so1 +1;

echo '$so1 = ' .$so1. "\n";     // 1
echo '$so2 = ' .$so2. "\n";     // 1

$so2 =5;

echo '$so1 = ' .$so1. "\n";     //5
echo '$so2 = ' .$so2. "\n"; ;   //5


$so1 = 3;

echo '$so1 = ' .$so1. "\n";     //5
echo '$so2 = ' .$so2. "\n"; ;   //5
