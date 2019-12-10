<?php
define('FNAME', __DIR__ . '/test.txt');
$result = 'undefined';
// make it impossible to write to the file
$fh = fopen(FNAME, 'r');
try {
    //chmod(FNAME, '333');
    $result = fwrite($fh, 'Added this line' . PHP_EOL);
} catch (Throwable $t) {
    echo get_class($t) . ': ERROR' . PHP_EOL;
} finally {
    fclose($fh);
    echo "\nReturn Value of fwrite(): \n";
    var_dump($result);
}
