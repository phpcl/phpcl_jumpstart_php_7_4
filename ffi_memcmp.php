<?php

// create C data structure
$a = FFI::new("char[8]");
$b = FFI::new("char[8]");
$c = FFI::new("char[8]");

// work with it like with a regular PHP array
$a = 'ABCDEFGH';
$b = 'ABCDMNOP';
$c = 'DEFGHIJK';

// display strings
echo '$a : ' . $a . PHP_EOL;
echo '$b : ' . $b . PHP_EOL;
echo '$c : ' . $c . PHP_EOL;

// output results
echo 'memcmp($a, $b, 4) : ' . FFI::memcmp($a, $b, 4) . PHP_EOL;
echo 'memcmp($a, $b, 8) : ' . FFI::memcmp($a, $b, 8) . PHP_EOL;
echo 'memcmp($c, $a, 8) : ' . FFI::memcmp($c, $a, 8) . PHP_EOL;
