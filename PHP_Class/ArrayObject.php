<?php

$array = array('1' => 'one',
               '2' => 'two',
               '3' => 'three');

$arrayobject = new ArrayObject($array);

//echo $arrayobject;

var_dump($arrayobject);
?>
