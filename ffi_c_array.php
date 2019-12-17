<?php
// create C data structure
$a = FFI::new("long[1024]");
// work with it like with a regular PHP array
$max = count($a);
for ($i = 0; $i < $max; $i++) $a[$i] = $i;
var_dump($max);
var_dump($a[25]);
var_dump(FFI::sizeof($a));
// warning: $a is *not* an array!
echo array_sum($a);
