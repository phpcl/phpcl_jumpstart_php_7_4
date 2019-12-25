<?php

// create C data structure
$a = FFI::new("long[1024]");

// work with it like with a regular PHP array
$max = 16;
for ($i = 0; $i < $max; $i++) $a[$i] = rand(1,999);

// output results
echo 'Element 8 : ' . $a[8];
echo PHP_EOL;
echo 'Array Size: ' . FFI::sizeof($a);
echo PHP_EOL;

// warning: $a is *not* an array!
echo array_sum($a);
