<?php
// FFI preload example
$bubble = new Bubble();     // preloaded
$max = 16;
// populate array with random numbers
$array = FFI::new('long[' . $max . ']');
for ($i = 0; $i < $max; $i++) $array[$i] = rand(0,9999);

// display current state
echo "\nCurrent State:\n";
echo $bubble->show($array);

// display state post-sort
echo "\nAfter Sort:\n";
$bubble->sort($array, $max);
echo $bubble->show($array);
echo PHP_EOL;
