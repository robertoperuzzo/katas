<?php
/**
 * Created by PhpStorm.
 * User: robertoperuzzo
 * Date: 04/01/18
 * Time: 20:16
 */

include_once 'classes/Quicksort.php';

$array = [3, 10, 239, 4, 35, 100, 84, 145, 1];

$quicksort = new Quicksort();

$time_start = microtime(true);

$ordered_array = $quicksort->sort($array, 0, count($array) - 1);

$time_end = microtime(true);

$time = $time_end - $time_start;
$time = number_format(($time * 1000), 3);
print "Process Time: {$time}ms \n";
print "Sorted array:\n";
$quicksort->printArray($array);

