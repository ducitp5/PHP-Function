<?php

function getRange ($max = 10) {
    for ($i = 1; $i < $max; $i++) {

        $injected = yield $i;

        var_dump($injected);

        if ($injected === 'stop') return;
    }
}

$generator = getRange(PHP_INT_MAX);

var_dump($generator);

foreach ($generator as $range) {

    if ($range === 10000) {
        $generator->send('stop');
    }

    echo "Dataset {$range} <br>";
}