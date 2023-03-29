<?php
$array1 = ['c' => 6, 'd' => 2, 2 => 3, 3 => 4, 4 => 7, 's'];
$array2 = ['a' => 0, 'g' => 2, 2 => 6, 's'];
$array3 = ['b' => 0, 1 => 2, 2 => 6, 3 => 8, 's'];

$combinedArray = array_intersect($array1, $array2, $array3);

var_dump($combinedArray);

$array1 = [0 => 0, 1 => 2, 2 => 3, 3 => 4, 4 => 7];
$array2 = [0 => 0, 1 => 2, 2 => 6];
$array3 = [0 => 0, 1 => 2, 2 => 6, 3 => 8];

$combinedArray = array_intersect($array1, $array2, $array3);
$ar = [];

foreach ($combinedArray as $value) {
    $keys = [];

    if (in_array($value, $array1)) {
        $keys[] = array_search($value, $array1);
    }

    if (in_array($value, $array2)) {
        $keys[] = array_search($value, $array2);
    }

    if (in_array($value, $array3)) {
        $keys[] = array_search($value, $array3);
    }

    $nestedArray = &$ar;

    foreach ($keys as $key) {
        if (!array_key_exists($key, $nestedArray)) {
            $nestedArray[$key] = [];
        }

        $nestedArray = &$nestedArray[$key];
    }
}

var_dump($ar);