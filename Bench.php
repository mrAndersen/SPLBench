<?php

abstract class Bench{
    public static function outputUsage()
    {
        echo '<pre>';
        echo "Memory: ".self::formatSize(memory_get_usage(true));
        echo '</pre>';
    }

    public static function outputTimeFromStart($start)
    {
        echo '<pre>';
        echo "Exec time: ".round((microtime(true) - $start),2);
        echo '</pre>';
    }

    public static function formatSize($bytes, $decimals = 2)
    {
        $sz = 'BKMGTP';
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
    }

    public static function prepareTestArray()
    {
        $array = [];
        for($i = 0; $i < 1000000; $i++){
            $array[] = mt_rand(0,$i);
        }
        return $array;
    }


}