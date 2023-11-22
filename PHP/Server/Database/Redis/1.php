<?php

//Connecting to Redis server on localhost
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$redis->get('k1');
echo "Server is running: ".$redis->ping();
