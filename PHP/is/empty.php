
<?php
// $var = 0;

// // Evaluates to true because $var is empty
// if (empty($var)) {
//     echo 'empty($var) <hr>';
// }

// // Evaluates as true because $var is set
// if (isset($var)) {
//     echo '$var is set even though it is empty';
// }

$testCase = array(
    1 => '',
    2 => "",
    3 => null,
    4 => array(),
    5 => FALSE,
    6 => NULL,
    7=>'0',
    8=>0,
   
);

foreach ($testCase as $k => $v) {
    if (empty($v)) {
        echo "<br> $k=>$v is empty";
    }
}
?>
