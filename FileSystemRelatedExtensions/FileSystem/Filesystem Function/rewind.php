
<?php

$handle = fopen('output.txt', 'w+');

fwrite($handle, 'Really long sentence.');
rewind($handle);
fwrite($handle, 'Foo');
rewind($handle);

echo filesize('output.txt') ."\n <br>";

echo stream_get_contents($handle, filesize('output.txt')) ."\n <br>";

rewind(($handle));

echo fread($handle, 25);

fclose($handle);

?>
