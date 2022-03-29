<?php

// function destroy_foo() 
// {
//     global $foo;
//     unset($foo);
// }

// $foo = 'bar';
// destroy_foo();

// echo $foo;

$bar = "something \n";
echo isset($bar);

echo " <br> ------";
function foo()
{
    unset($GLOBALS['bar']);
    
//    echo isset($GLOBALS['bar']);
}

echo $bar = null;
echo " <br> ------";

echo isset($bar);
echo " <br> ------";
foo();

$bar;

echo $bar;
echo isset($bar);