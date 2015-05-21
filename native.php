<?php

require_once('Bench.php');

$array = Bench::prepareTestArray();
$start = microtime(true);


foreach($array as $k=>$v){
    $secondArray[$k] = $array[$k] * 2;
}

Bench::outputTimeFromStart($start);
Bench::outputUsage();