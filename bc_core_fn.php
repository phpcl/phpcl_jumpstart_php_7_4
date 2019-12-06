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
    function fn() { 
        $output = __FUNCTION__ . ': does not work in PHP 7.4';
        return $output . PHP_EOL;
    }
    echo fn() . PHP_EOL;
    class Fn 
    {
        public function fn()
        {
	    return __METHOD__ . ': does not work in PHP 7.4' . PHP_EOL;
        }
    }
    $notOk = new Fn();
    echo $notOk->fn();
} catch (Throwable $t) {
    echo get_class($t) . ':' . $t->getMessage();
}
echo PHP_EOL;
