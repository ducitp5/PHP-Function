<?php

// Declaring an array
$arr = [1,2];

// Assigning values
$arr[2] = 5;
$arr[] = 6;

$arr_asso =[
    "a" => "x",
    "b" => "y",
];

// Declaring an array
$arr += $arr_asso;

$arr[] = 7;

// Assigning values
print("Array : ");
print_r($arr);

