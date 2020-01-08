<?php
$fn = 'Works';
class ThisIsOk
{
    const FN = 'Class const OK';
    public function fn()
    {
	return __METHOD__ . ': works OK' . PHP_EOL;
    }
}
echo $fn . PHP_EOL;
$ok = new ThisIsOk();
echo ThisIsOk::FN . PHP_EOL;
echo $ok->fn();

try {
    // can't use "FN" as a constant in PHP 7.4
    define('FN', 'filename.txt');
    echo FN . " does not work in PHP 7.4 \n";
    // can't use "fn" as a function name in PHP 7.4
    function fn() { 
        $output = __FUNCTION__ . ": does not work in PHP 7.4\n";
        return $output;
    }
    echo fn();
    // classname `Fn` does not work
    class Fn 
    {
        public function fn()
        {
	    return __METHOD__ . ": does not work in PHP 7.4\n"';
        }
    }
    $notOk = new Fn();
    echo $notOk->fn();
} catch (Throwable $t) {
    echo get_class($t) . ':' . $t->getMessage();
}
echo PHP_EOL;
