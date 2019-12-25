<?php
// create C "int" types
$t1 = FFI::type("int");
$t2 = FFI::type("int");

// assign values
$t1 = 33;
$t2 = 44;

// use them in an expression
echo "\nUsing C int Types:\n";
echo "\nt1 + t2: " . ($t1 + $t2);
echo "\n";

// create C array
$t3 = FFI::new("char[3][3]");

// populate array with values
$alpha = range('A', 'I');
$pos   = 0;
for ($x = 0; $x < 3; $x++) {
    for ($y = 0; $y < 3; $y++) {
        $t3[$x][$y] = $alpha[$pos++];
    }
}

// display contents of C array
echo "\nMulti-Dimensional C Array:\n";
for ($x = 0; $x < 3; $x++) {
    for ($y = 0; $y < 3; $y++) {
        echo $t3[$x][$y] . "\t";
    }
    echo "\n";
}
echo "\n";

