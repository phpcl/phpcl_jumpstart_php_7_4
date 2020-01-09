<?php
spl_autoload_register( function ($class) {
    $fn = __DIR__ . '/' . $class . '.php';
    include $fn;
});
$test  = new IterTest();
$objIt = new IterObj([1,2,3]);
$arrIt = new ArrayIterator(['A','B','C']);
echo $test->stringify($objIt);
echo $test->stringify($arrIt);
