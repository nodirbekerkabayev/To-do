<?php

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$redis->set('name',"Abdulaziz");
echo $redis->get('name');