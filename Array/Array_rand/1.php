<?php 

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");

$rand_keys = array_rand($input);

var_dump($input[$rand_keys]);