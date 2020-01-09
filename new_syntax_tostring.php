<?php
echo "\n__toString() Exception\n";
class Test {
    public function __toString() {
        throw new Exception('Only in PHP 7.4');
    }
}
try {
    $test = new Test();
    echo $test;
} catch (Throwable $e) {
    echo get_class($e) . ':' . $e->getMessage() . "\n";
}


