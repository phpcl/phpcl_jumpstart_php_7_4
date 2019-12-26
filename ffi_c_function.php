<?php
$ffi = FFI::cdef(
    "void bubble_sort(long [], long);",
    "./libbubble.so");
$max   = 16;
$array = FFI::new('long[' . $max . ']');
// output function
function show($array)
{
    $count = 3;
    $output = '| ';
    for ($i = 0; $i < count($array); $i++) {
        $output .= sprintf("%02d : %4d | \t", $i, $array[$i]);
        if ($count-- === 0) {
            $count = 3;
            $output .= PHP_EOL . '| ';
        }
    }
    return substr($output,0,-2) . PHP_EOL;
}
// create array with random numbers
for ($i = 0; $i < $max; $i++) $array[$i] = rand(0,9999);
// display current state
echo "\nCurrent State:\n";
echo show($array);
echo "\nAfter Sort:\n";
$ffi->bubble_sort($array, $max);
echo show($array);
echo PHP_EOL;
