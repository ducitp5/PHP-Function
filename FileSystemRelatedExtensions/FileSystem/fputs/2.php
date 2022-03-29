
<?php

$filename = 'test.txt';
$something = "Add some things\n";
$somecontent = "Add this to the file\n";

$stream     =   fopen( $filename , 'w');

fwrite($stream , $something);

fclose($stream);

// Let's make sure the file exists and is writable first.
if (is_writable($filename)) {

    // In our example we're opening $filename in append mode.
    // The file pointer is at the bottom of the file hence
    // that's where $somecontent will go when we fwrite() it.

    if (!$fp = fopen($filename, 'a')) {
         echo "Cannot open file ($filename)";
         exit;
    }

    // Write $somecontent to our opened file.
    
    if (fwrite($fp, $somecontent) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }

    echo "Success, wrote ($somecontent) to file ($filename)";

    fclose($fp);

} 
else {

    echo "The file $filename is not writable";
}

?>
