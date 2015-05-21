<?php

require_once('Bench.php');


$array = Bench::prepareTestArray();
$start = microtime(true);


$object = new ArrayObject($array);
$iterator  = $object->getIterator();

while($iterator->valid()){
    $secondArray[$iterator->key()] = $iterator->current() * 2;
    $iterator->next();
}

Bench::outputTimeFromStart($start);
Bench::outputUsage();