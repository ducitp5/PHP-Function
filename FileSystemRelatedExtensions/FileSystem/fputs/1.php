
<?php

// Set the limit to 5 MB.

$fiveMBs = 5 * 1024 * 1024;

$file   =   fopen("test1.txt" , 'w+');

// $fp = fopen("php://temp/maxmemory:$fiveMBs", 'w+');

fputs($file, "hello\n");

// Read what we have written.
rewind($file);

echo stream_get_contents($file);

?>
