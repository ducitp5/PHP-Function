<?php

echo mt_rand() ."<br>";

function getRange ($max = 10) {
    for ($i = 1; $i < $max; $i++) {
        $value = $i * mt_rand();

        yield $i => $value;
    }
}

foreach (getRange(5000) as $range => $value)
{
    echo "Dataset {$range} has {$value} value<br>";
}