<?php
$numFloat = 12345.6789;
$numInt   = 123456789;
$numBool  = TRUE;
$strVal   = 'ABCDEF';

try {
    echo $strVal;
    echo PHP_EOL;
    echo $strVal[0];
    echo PHP_EOL;
    echo $numFloat;
    echo PHP_EOL;
    echo $numFloat[0];
} catch (Throwable $t) {
    echo get_class($t) . ':' . $t->getMessage();
}
echo PHP_EOL;

