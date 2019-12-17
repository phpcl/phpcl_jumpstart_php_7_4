<?php
$t1 = FFI::type("int[2][3]");
$t2 = FFI::arrayType(FFI::type("int"), [2, 3]);
var_dump($t1, $t2);
