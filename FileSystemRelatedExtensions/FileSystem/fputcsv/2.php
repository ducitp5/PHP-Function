<?php

$out = fopen('php://output', 'w');

$fiveMBs = 5 * 1024 * 1024;

//$out = fopen("php://temp/maxmemory:$fiveMBs", 'w');

fputcsv($out, array('this','is some', 'csv "stuff", you know.'));

fclose($out);

?>